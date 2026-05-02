<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library – Perpustakaan Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #0f172a;
            --blue: #2563eb;
            --blue-soft: #eff6ff;
            --slate: #64748b;
            --light: #f8faff;
            --white: #ffffff;
            --border: #e2e8f0;
            --green: #10b981;
            --green-soft: #ecfdf5;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--white);
            color: var(--navy);
            overflow-x: hidden;
        }

        /* NAVBAR */
        nav {
            position: fixed;
            top: 16px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            width: calc(100% - 80px);
            max-width: 1100px;
            padding: 14px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(16px);
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(15, 23, 42, 0.06);
        }

        .logo { display: flex; align-items: center; gap: 10px; text-decoration: none; }
        .logo-icon { width: 34px; height: 34px; background: var(--blue); border-radius: 9px; display: flex; align-items: center; justify-content: center; font-size: 16px; }
        .logo-name { font-weight: 700; font-size: 16px; color: var(--navy); }

        .nav-links { display: flex; align-items: center; gap: 8px; }
        .nav-link { padding: 8px 16px; font-size: 14px; font-weight: 500; color: var(--slate); text-decoration: none; border-radius: 8px; transition: all 0.15s; }
        .nav-link:hover { color: var(--navy); background: var(--light); }
        .nav-btn { padding: 9px 20px; background: var(--navy); color: white; font-size: 14px; font-weight: 600; border-radius: 10px; text-decoration: none; transition: all 0.15s; }
        .nav-btn:hover { background: #1e293b; }

        /* HERO */
        .hero {
            padding: 140px 40px 80px;
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            min-height: 100vh;
        }

        .hero-left { animation: fadeUp 0.7s ease both; }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--green-soft);
            color: var(--green);
            border: 1px solid #a7f3d0;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 28px;
        }

        .tag-dot { width: 6px; height: 6px; background: var(--green); border-radius: 50%; animation: pulse 2s infinite; }

        h1 {
            font-size: clamp(34px, 4vw, 52px);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1.5px;
            color: var(--navy);
            margin-bottom: 20px;
        }

        h1 em { font-style: normal; color: var(--blue); }

        .hero-sub {
            font-size: 15px;
            color: var(--slate);
            line-height: 1.75;
            max-width: 400px;
            margin-bottom: 36px;
        }

        .hero-btns { display: flex; gap: 10px; align-items: center; }

        .btn-main {
            padding: 13px 26px;
            background: var(--blue);
            color: white;
            border-radius: 11px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.3);
            transition: all 0.2s;
        }

        .btn-main:hover { background: #1d4ed8; transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4); }

        .btn-ghost {
            padding: 13px 20px;
            color: var(--slate);
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            border-radius: 11px;
            border: 1px solid var(--border);
            transition: all 0.15s;
        }

        .btn-ghost:hover { color: var(--navy); border-color: #94a3b8; }

        .trust {
            margin-top: 36px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatars { display: flex; }
        .av {
            width: 28px; height: 28px; border-radius: 50%;
            border: 2px solid white; margin-left: -8px;
            font-size: 11px; font-weight: 700; color: white;
            display: flex; align-items: center; justify-content: center;
        }
        .av:first-child { margin-left: 0; }
        .trust-text { font-size: 13px; color: var(--slate); }
        .trust-text strong { color: var(--navy); }

        /* HERO RIGHT */
        .hero-right { position: relative; animation: fadeUp 0.7s ease 0.15s both; }

        .preview {
            background: white;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 24px 64px rgba(15, 23, 42, 0.09);
        }

        .preview-bar {
            display: flex;
            align-items: center;
            gap: 6px;
            padding-bottom: 14px;
            margin-bottom: 16px;
            border-bottom: 1px solid #f1f5f9;
        }

        .dot { width: 9px; height: 9px; border-radius: 50%; }
        .preview-bar-title { margin-left: auto; font-size: 11px; font-weight: 600; color: var(--slate); }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-bottom: 16px;
        }

        .stat-box { background: var(--light); border-radius: 10px; padding: 12px; }
        .stat-val { font-size: 20px; font-weight: 800; color: var(--navy); letter-spacing: -0.5px; }
        .stat-lbl { font-size: 10px; color: var(--slate); margin-top: 2px; }

        .table-head {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            padding: 6px 10px;
            font-size: 10px;
            font-weight: 600;
            color: var(--slate);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            padding: 9px 10px;
            border-radius: 8px;
            align-items: center;
            margin-bottom: 3px;
        }

        .table-row:hover { background: var(--light); }

        .book-cell { display: flex; align-items: center; gap: 8px; }
        .book-thumb { width: 26px; height: 36px; border-radius: 4px; flex-shrink: 0; }
        .book-nm { font-size: 12px; font-weight: 600; color: var(--navy); }
        .book-au { font-size: 10px; color: var(--slate); }
        .book-stok { font-size: 12px; font-weight: 700; color: var(--navy); }

        .bdg { display: inline-block; padding: 2px 8px; border-radius: 20px; font-size: 10px; font-weight: 600; }
        .bdg-g { background: var(--green-soft); color: var(--green); }
        .bdg-r { background: #fef2f2; color: #ef4444; }

        /* Pills */
        .pill {
            position: absolute;
            background: white;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 10px 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
            white-space: nowrap;
        }

        .pill-1 { top: -16px; right: 16px; animation: float 3s ease-in-out infinite; }
        .pill-2 { bottom: -16px; left: 16px; animation: float 3s ease-in-out infinite 1.5s; }

        .pill-ico { width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 14px; }
        .pill-main { font-size: 12px; font-weight: 600; color: var(--navy); }
        .pill-sub { font-size: 10px; color: var(--slate); }

        /* FEATURES */
        .sec {
            padding: 100px 40px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .sec-tag { display: inline-block; background: var(--blue-soft); color: var(--blue); padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-bottom: 14px; }

        h2 { font-size: clamp(26px, 3vw, 36px); font-weight: 800; letter-spacing: -1px; color: var(--navy); margin-bottom: 10px; line-height: 1.25; }

        .sec-sub { font-size: 15px; color: var(--slate); line-height: 1.7; max-width: 460px; margin-bottom: 48px; }

        .feat-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }

        .feat {
            padding: 24px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: white;
            transition: all 0.2s;
        }

        .feat:hover { border-color: rgba(37,99,235,0.2); box-shadow: 0 12px 32px rgba(15,23,42,0.05); transform: translateY(-3px); }

        .feat-ico { width: 42px; height: 42px; border-radius: 11px; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 14px; }
        .feat-title { font-size: 14px; font-weight: 700; color: var(--navy); margin-bottom: 6px; }
        .feat-desc { font-size: 13px; color: var(--slate); line-height: 1.6; }

        /* BANNER */
        .banner {
            margin: 0 40px 80px;
            background: var(--navy);
            border-radius: 22px;
            padding: 60px;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 40px;
        }

        .banner-label { font-size: 12px; color: rgba(255,255,255,0.4); font-weight: 600; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px; }
        .banner-title { font-size: clamp(22px, 2.5vw, 32px); font-weight: 800; color: white; letter-spacing: -0.5px; margin-bottom: 20px; line-height: 1.3; }

        .banner-nums { display: flex; gap: 40px; }
        .bn-val { font-size: 36px; font-weight: 800; color: white; letter-spacing: -1px; }
        .bn-val span { color: #60a5fa; }
        .bn-lbl { font-size: 12px; color: rgba(255,255,255,0.4); margin-top: 2px; }

        .banner-right { text-align: right; }
        .banner-desc { font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.6; margin-bottom: 20px; max-width: 240px; margin-left: auto; }

        .btn-white { display: inline-block; padding: 12px 24px; background: white; color: var(--navy); border-radius: 10px; font-size: 14px; font-weight: 700; text-decoration: none; transition: all 0.15s; }
        .btn-white:hover { background: #f1f5f9; }

        /* FOOTER */
        footer {
            padding: 28px 40px;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1100px;
            margin: 0 auto;
        }

        .footer-copy { font-size: 13px; color: var(--slate); }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50%       { transform: translateY(-8px); }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.4; }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav>
    <a href="/" class="logo">
        <div class="logo-icon">📚</div>
        <span class="logo-name">Library</span>
    </a>
    <div class="nav-links">
        <a href="#fitur" class="nav-link">Fitur</a>
        <a href="{{ route('login') }}" class="nav-link">Masuk</a>
        <a href="{{ route('register') }}" class="nav-btn">Daftar →</a>
    </div>
</nav>

<!-- HERO -->
<div class="hero">
    <div class="hero-left">
        <div class="tag">
            <div class="tag-dot"></div>
            Sistem Perpustakaan Digital
        </div>

        <h1>Kelola Perpustakaan<br><em>Lebih Cerdas</em></h1>

        <p class="hero-sub">
            Platform manajemen perpustakaan yang memudahkan admin dan anggota dalam proses peminjaman, pengembalian, dan pelaporan buku secara digital.
        </p>

        <div class="hero-btns">
            <a href="{{ route('register') }}" class="btn-main">Bergabung Sekarang</a>
            <a href="{{ route('login') }}" class="btn-ghost">Sudah punya akun?</a>
        </div>

        <div class="trust">
            <div class="avatars">
                <div class="av" style="background:#3b82f6;">A</div>
                <div class="av" style="background:#8b5cf6;">B</div>
                <div class="av" style="background:#10b981;">C</div>
                <div class="av" style="background:#f59e0b;">D</div>
            </div>
            <div class="trust-text"><strong>100+ anggota</strong> sudah bergabung</div>
        </div>
    </div>

    <div class="hero-right">
        <div class="pill pill-1">
            <div class="pill-ico" style="background:#ecfdf5;">✅</div>
            <div>
                <div class="pill-main">Token Terverifikasi</div>
                <div class="pill-sub">TRX-AD88PWPX</div>
            </div>
        </div>

        <div class="preview">
            <div class="preview-bar">
                <div class="dot" style="background:#ef4444;"></div>
                <div class="dot" style="background:#f59e0b;"></div>
                <div class="dot" style="background:#10b981;"></div>
                <span class="preview-bar-title">Dashboard Admin</span>
            </div>

            <div class="stats-row">
                <div class="stat-box">
                    <div class="stat-val">11</div>
                    <div class="stat-lbl">Total Buku</div>
                </div>
                <div class="stat-box">
                    <div class="stat-val">3</div>
                    <div class="stat-lbl">Dipinjam</div>
                </div>
                <div class="stat-box">
                    <div class="stat-val">Rp 2K</div>
                    <div class="stat-lbl">Total Denda</div>
                </div>
            </div>

            <div class="table-head">
                <span>Buku</span><span>Stok</span><span>Status</span>
            </div>

            <div class="table-row">
                <div class="book-cell">
                    <div class="book-thumb" style="background:linear-gradient(135deg,#f59e0b,#ef4444);"></div>
                    <div><div class="book-nm">Laskar Pelangi</div><div class="book-au">Andrea Hirata</div></div>
                </div>
                <div class="book-stok">14</div>
                <span class="bdg bdg-g">Tersedia</span>
            </div>

            <div class="table-row">
                <div class="book-cell">
                    <div class="book-thumb" style="background:linear-gradient(135deg,#3b82f6,#8b5cf6);"></div>
                    <div><div class="book-nm">Harry Potter</div><div class="book-au">J.K. Rowling</div></div>
                </div>
                <div class="book-stok">21</div>
                <span class="bdg bdg-g">Tersedia</span>
            </div>

            <div class="table-row">
                <div class="book-cell">
                    <div class="book-thumb" style="background:linear-gradient(135deg,#10b981,#059669);"></div>
                    <div><div class="book-nm">Laut Bercerita</div><div class="book-au">Leila S. Chudori</div></div>
                </div>
                <div class="book-stok">0</div>
                <span class="bdg bdg-r">Habis</span>
            </div>
        </div>

        <div class="pill pill-2">
            <div class="pill-ico" style="background:#eff6ff;">📊</div>
            <div>
                <div class="pill-main">Laporan Bulan Ini</div>
                <div class="pill-sub">Rp 2.000 total denda</div>
            </div>
        </div>
    </div>
</div>

<!-- FEATURES -->
<div class="sec" id="fitur">
    <div class="sec-tag">Fitur Platform</div>
    <h2>Semua yang kamu butuhkan<br>ada di sini</h2>
    <p class="sec-sub">Dari manajemen koleksi hingga laporan otomatis — dirancang untuk mempermudah kerja admin dan pengalaman anggota.</p>

    <div class="feat-grid">
        <div class="feat">
            <div class="feat-ico" style="background:#eff6ff;">📚</div>
            <div class="feat-title">Manajemen Koleksi</div>
            <p class="feat-desc">Tambah, edit, dan hapus buku dengan mudah. Stok terpantau otomatis setiap ada transaksi peminjaman.</p>
        </div>
        <div class="feat">
            <div class="feat-ico" style="background:#f0fdf4;">🎫</div>
            <div class="feat-title">Sistem Token Aman</div>
            <p class="feat-desc">Setiap peminjaman mendapat token unik yang diverifikasi admin. Tidak bisa dipalsukan atau dipakai dua kali.</p>
        </div>
        <div class="feat">
            <div class="feat-ico" style="background:#fef3c7;">⏱️</div>
            <div class="feat-title">Hitung Denda Otomatis</div>
            <p class="feat-desc">Sistem menghitung denda keterlambatan secara otomatis berdasarkan tanggal pengembalian yang disepakati.</p>
        </div>
        <div class="feat">
            <div class="feat-ico" style="background:#fdf4ff;">👤</div>
            <div class="feat-title">Manajemen Anggota</div>
            <p class="feat-desc">Admin dapat mengelola data anggota, menyetujui pendaftaran, dan memantau riwayat setiap anggota.</p>
        </div>
        <div class="feat">
            <div class="feat-ico" style="background:#fff1f2;">📈</div>
            <div class="feat-title">Laporan PDF</div>
            <p class="feat-desc">Ekspor laporan mingguan dan bulanan dalam format PDF kapan saja dengan statistik yang lengkap.</p>
        </div>
        <div class="feat">
            <div class="feat-ico" style="background:#f0f9ff;">🔒</div>
            <div class="feat-title">Kontrol Akses</div>
            <p class="feat-desc">Dua level akses — admin dan anggota — memastikan setiap pengguna hanya bisa mengakses fitur yang sesuai.</p>
        </div>
    </div>
</div>

<!-- BANNER -->
<div class="banner">
    <div>
        <div class="banner-label">Kenapa Pilih Kami?</div>
        <div class="banner-title">Perpustakaan modern<br>dimulai dari sini.</div>
        <div class="banner-nums">
            <div>
                <div class="bn-val">11<span>+</span></div>
                <div class="bn-lbl">Koleksi Buku</div>
            </div>
            <div>
                <div class="bn-val">3<span>+</span></div>
                <div class="bn-lbl">Anggota Aktif</div>
            </div>
            <div>
                <div class="bn-val">99<span>%</span></div>
                <div class="bn-lbl">Akurasi Data</div>
            </div>
        </div>
    </div>
    <div class="banner-right">
        <p class="banner-desc">Daftar sekarang dan mulai kelola perpustakaan kamu secara digital — gratis.</p>
        <a href="{{ route('register') }}" class="btn-white">Mulai Sekarang →</a>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <a href="/" class="logo">
        <div class="logo-icon">📚</div>
        <span class="logo-name">Library</span>
    </a>
    <div class="footer-copy">© 2026 Library — Sistem Perpustakaan Digital</div>
</footer>

</body>
</html>
