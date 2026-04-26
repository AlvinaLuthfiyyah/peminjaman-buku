<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    // DASHBOARD SISWA + SEARCH
    
    public function dashboard(Request $request)
    {
        $search = $request->search;

        $books = Book::when($search, function ($query, $search) {
            $query->where('judul', 'like', "%{$search}%")
                  ->orWhere('penulis', 'like', "%{$search}%");
        })->paginate(10);

        return view('anggota.dashboard', compact('books', 'search'));
    }

    // ADMIN CRUD

    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('penulis', 'like', '%' . $request->search . '%');
            });
        }

        $books = $query->latest()->paginate(10)->withQueryString();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function edit(Book $book)
{
    return view('books.edit', compact('book'));
}

    // STORE + UPLOAD COVER
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'    => 'required',
            'penulis'  => 'required',
            'genre'    => 'required',
            'penerbit' => 'nullable',
            'deskripsi'=> 'nullable',
            'stok'     => 'required|integer',
            'cover'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);
\Log::info('Attempting upload', [
    'disk' => config('filesystems.disks.s3'),
    'has_file' => $request->hasFile('cover'),
]);
        // Upload (S3)
        if ($request->hasFile('cover')) {
            $validated['cover'] = $request->file('cover')->store('covers', 's3');
        }

        Book::create($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    // EDIT

  public function update(Request $request, Book $book)
{
    $validated = $request->validate([
        'judul'     => 'required',
        'penulis'   => 'required',
        'genre'     => 'required',
        'penerbit'  => 'nullable',
        'deskripsi' => 'nullable',
        'stok'      => 'required|integer',
        'cover'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    if ($request->hasFile('cover')) {
        // [FIX] Konsisten pakai 's3'
        if ($book->cover && Storage::disk('public')->exists($book->cover)) {
            Storage::disk('public')->delete($book->cover);
        }
        $validated['cover'] = $request->file('cover')->store('covers', 'public');
    } else {
        unset($validated['cover']);
    }

    $book->update($validated);

    return redirect()->route('books.index')
        ->with('success', 'Buku berhasil diupdate');
}

    // DELETE + HAPUS COVER
    
    public function destroy(Book $book)
    {
        // ✅ Hapus cover dari S3
        if ($book->cover && Storage::disk('s3')->exists($book->cover)) {
            Storage::disk('s3')->delete($book->cover);
        }

        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus');
    }

    // DETAIL BUKU

    public function show(Book $book)
    {
        if (auth()->user()->role === 'anggota') {
            return view('anggota.detail', compact('book'));
        }

        return view('books.show', compact('book'));
    }


    // ADMIN DASHBOARD
    
    public function adminDashboard()
    {
        $totalBuku     = Book::count();
        $totalDipinjam = Borrowing::where('status', 'dipinjam')->count();
        $totalSelesai  = Borrowing::where('status', 'dikembalikan')->count();
        $recentBooks   = Book::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalBuku',
            'totalDipinjam',
            'totalSelesai',
            'recentBooks'
        ));
    }

    // KATALOG ANGGOTA

    public function anggota(Request $request)
    {
        $query = Book::query();

        if ($request->search) {
            $query->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('penulis', 'like', '%' . $request->search . '%');
        }

        $books = $query->latest()->paginate(10);

        return view('anggota.katalog', compact('books'));
    }
}
