<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
            'judul' => 'Bumi Manusia',
            'penulis' => 'Pramoedya Ananta Toer',
            'penerbit' => 'Hasta Mitraa',
            'genre' => 'Drama',
            'stok' => 21,
            'cover' => null, 
            'deskripsi' => 'Buku ini bercerita tentang perjalanan seorang tokoh bernama Minke. Minke adalah salah satu anak pribumi yang sekolah di HBS. Pada masa itu, yang dapat masuk ke sekolah HBS adalah orang-orang keturunan Eropa. Minke adalah seorang pribumi yang pandai, ia sangat pandai menulis. Tulisannya bisa membuat orang sampai terkagum-kagum dan dimuat di berbagai Koran Belanda pada saat itu. Hanya saja sebagai seorang pribumi, ia kurang disukai oleh siswa-siswi Eropa lainnya. Minke digambarkan sebagai seorang revolusioner di buku ini. Ia berani melawan ketidakadilan yang terjadi pada bangsanya. Ia juga berani memberontak terhadap kebudayaan Jawa, yang membuatnya selalu di bawah. Selain tokoh Minke, buku ini juga menggambarkan seorang "Nyai" yang bernama Nyai Ontosoroh. Nyai pada saat itu dianggap sebagai perempuan yang tidak memiliki norma kesusilaan karena statusnya sebagai istri simpanan. Statusnya sebagai seorang Nyai telah membuatnya sangat menderita, karena ia tidak memiliki hak asasi manusia yang sepantasnya. Namun, yang menariknya adalah Nyai Ontosoroh sadar akan kondisi tersebut sehingga dia berusaha keras dengan terus-menerus belajar, agar dapat diakui sebagai seorang manusia. Nyai Ontosoroh berpendapat, untuk melawan penghinaan, kebodohan, kemiskinan, dan sebagainya hanyalah dengan belajar. Minke juga menjalin asmara dan akhirnya menikah dengan Annelies, anak dari Nyai Ontosoroh dan tuan Mellema. Melalui buku ini, Pram menggambarkan bagaimana keadaan pemerintahan kolonialisme Belanda pada saat itu secara hidup. Pram, menunjukan betapa pentingnya belajar. Dengan belajar, dapat mengubah nasib. Seperti di dalam buku ini, Nyai yang tidak bersekolah, dapat menjadi seorang guru yang hebat bagi siswa HBS dan Minke. Bahkan pengetahuan si nyai itu, yang didapat dari pengalaman, dari buku-buku, dan dari kehidupan sehari-hari, ternyata lebih luas dari guru-guru sekolah HBS.'
            ]
        ]);
    }
}