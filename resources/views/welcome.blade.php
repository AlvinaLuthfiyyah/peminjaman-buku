<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library – Perpustakaan Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #0f172a;
            --blue: #2563eb;
            --blue-light: #3b82f6;
            --indigo: #4f46e5;
            --slate: #64748b;
            --bg: #f8faff;
            --white: #ffffff;
            --border: #e2e8f0;
        }
 
        * { margin: 0; padding: 0; box-sizing: border-box; }
 
        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--navy);
            overflow-x: hidden;
        }
 
        /* ── NAVBAR ── */
        nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 100;
            padding: 18px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(248, 250, 255, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.6);
        }
 
        .nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
 
        .nav-logo-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--blue), var(--indigo));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
 
        .nav-logo-text {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: var(--navy);
        }
 
        .nav-logo-dot {
            color: var(--blue);
        }
 
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }
 
        .btn-ghost {
            padding: 8px 20px;
            border: none;
            background: transparent;
            color: var(--slate);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s;
        }
 
        .btn-ghost:hover {
            color: var(--navy);
            background: var(--border);
        }
 
        .btn-primary {
            padding: 9px 22px;
            background: var(--blue);
            color: white;
            border: none;
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
        }
 
        .btn-primary:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.35);
        }
 
        /* ── HERO ── */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 60px 80px;
            position: relative;
            overflow: hidden;
        }
 
        .hero-bg {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 50% at 70% 40%, rgba(37, 99, 235, 0.07) 0%, transparent 70%),
                radial-gradient(ellipse 40% 40% at 20% 80%, rgba(79, 70, 229, 0.05) 0%, transparent 70%);
        }
 
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 1;
        }
 
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(37, 99, 235, 0.08);
            border: 1px solid rgba(37, 99, 235, 0.2);
            color: var(--blue);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 24px;
            animation: fadeUp 0.6s ease both;
        }
 
        .hero-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(42px, 5vw, 64px);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1px;
            margin-bottom: 20px;
            animation: fadeUp 0.6s ease 0.1s both;
        }
 
        .hero-title-accent {
            color: var(--blue);
        }
 
        .hero-desc {
            font-size: 16px;
            color: var(--slate);
            line-height: 1.7;
            max-width: 420px;
            margin-bottom: 36px;
            animation: fadeUp 0.6s ease 0.2s both;
        }
 
        .hero-cta {
            display: flex;
            gap: 12px;
            animation: fadeUp 0.6s ease 0.3s both;
        }
 
        .btn-hero-primary {
            padding: 14px 28px;
            background: var(--blue);
            color: white;
            border: none;
            border-radius: 12px;
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.3);
        }
 
        .btn-hero-primary:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.4);
        }
 
        .btn-hero-outline {
            padding: 14px 28px;
            background: transparent;
            color: var(--navy);
            border: 1.5px solid var(--border);
            border-radius: 12px;
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
        }
 
        .btn-hero-outline:hover {
            border-color: var(--blue);
            color: var(--blue);
        }
 
        /* ── HERO VISUAL ── */
        .hero-visual {
            animation: fadeUp 0.6s ease 0.2s both;
        }
 
        .hero-card-main {
            background: white;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.08);
            border: 1px solid var(--border);
            position: relative;
        }
 
        .card-header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
 
        .card-title {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 15px;
            color: var(--navy);
        }
 
        .card-badge-green {
            background: #ecfdf5;
            color: #065f46;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }
 
        .book-list { display: flex; flex-direction: column; gap: 12px; }
 
        .book-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px;
            border-radius: 10px;
            transition: background 0.2s;
        }
 
        .book-item:hover { background: #f8faff; }
 
        .book-cover {
            width: 36px;
            height: 48px;
            border-radius: 6px;
            flex-shrink: 0;
        }
 
        .book-info { flex: 1; }
 
        .book-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--navy);
            margin-bottom: 2px;
        }
 
        .book-author {
            font-size: 11px;
            color: var(--slate);
        }
 
        .book-stok {
            font-size: 11px;
            font-weight: 600;
            color: var(--blue);
            background: #eff6ff;
            padding: 2px 8px;
            border-radius: 6px;
        }
 
        .floating-card {
            position: absolute;
            background: white;
            border-radius: 14px;
            padding: 12px 16px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.1);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 10px;
        }
 
        .floating-card-1 {
            top: -20px;
            right: -20px;
            animation: float 3s ease-in-out infinite;
        }
 
        .floating-card-2 {
            bottom: -20px;
            left: -20px;
            animation: float 3s ease-in-out infinite 1.5s;
        }
 
        .float-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
 
        .float-label { font-size: 11px; color: var(--slate); }
        .float-value { font-size: 15px; font-weight: 700; color: var(--navy); font-family: 'Syne', sans-serif; }
 
        /* ── FEATURES ── */
        .features {
            padding: 100px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }
 
        .section-label {
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--blue);
            margin-bottom: 12px;
        }
 
        .section-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(28px, 3vw, 40px);
            font-weight: 800;
            text-align: center;
            color: var(--navy);
            margin-bottom: 12px;
        }
 
        .section-desc {
            text-align: center;
            color: var(--slate);
            font-size: 15px;
            max-width: 500px;
            margin: 0 auto 60px;
            line-height: 1.6;
        }
 
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
 
        .feature-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 28px;
            transition: all 0.25s;
        }
 
        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
            border-color: rgba(37, 99, 235, 0.2);
        }
 
        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 16px;
        }
 
        .feature-title {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: var(--navy);
            margin-bottom: 8px;
        }
 
        .feature-desc {
            font-size: 13px;
            color: var(--slate);
            line-height: 1.6;
        }
 
        /* ── STATS ── */
        .stats {
            background: var(--navy);
            padding: 80px 60px;
            margin: 0 60px;
            border-radius: 24px;
        }
 
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
 
        .stat-number {
            font-family: 'Syne', sans-serif;
            font-size: 48px;
            font-weight: 800;
            color: white;
            line-height: 1;
            margin-bottom: 8px;
        }
 
        .stat-number span { color: var(--blue-light); }
 
        .stat-label {
            font-size: 14px;
            color: rgba(255,255,255,0.5);
        }
 
        /* ── CTA ── */
        .cta {
            padding: 100px 60px;
            text-align: center;
        }
 
        .cta-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(32px, 4vw, 52px);
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 16px;
        }
 
        .cta-desc {
            color: var(--slate);
            font-size: 16px;
            margin-bottom: 36px;
        }
 
        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 30px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
 
        .footer-text {
            font-size: 13px;
            color: var(--slate);
        }
 
        /* ── ANIMATIONS ── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
 
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50%       { transform: translateY(-8px); }
        }
    </style>
</head>
<body>
 
<!-- NAVBAR -->
<nav>
    <a href="#" class="nav-logo">
        <div class="nav-logo-icon">📚</div>
        <span class="nav-logo-text">Library<span class="nav-logo-dot">.</span></span>
    </a>
    <div class="nav-actions">
        <a href="{{ route('login') }}" class="btn-ghost">Masuk</a>
        <a href="{{ route('register') }}" class="btn-primary">Daftar Sekarang</a>
    </div>
</nav>
 
<!-- HERO -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid">
        <div class="hero-content">
            <div class="hero-badge">
                📖 V1.0 Sistem Perpustakaan Modern
            </div>
            <h1 class="hero-title">
                Baca Lebih<br>
                <span class="hero-title-accent">Mudah & Cepat.</span>
            </h1>
            <p class="hero-desc">
                Solusi cerdas untuk mengelola koleksi buku, data anggota, dan transaksi peminjaman dalam satu platform yang intuitif.
            </p>
            <div class="hero-cta">
                <a href="{{ route('register') }}" class="btn-hero-primary">Mulai Gratis</a>
                <a href="{{ route('login') }}" class="btn-hero-outline">Pelajari Fitur</a>
            </div>
        </div>
 
        <div class="hero-visual" style="position: relative; padding: 20px;">
            <!-- Floating card top right -->
            <div class="floating-card floating-card-1">
                <div class="float-icon" style="background: #ecfdf5;">✅</div>
                <div>
                    <div class="float-label">Akurasi Laporan</div>
                    <div class="float-value">99.9%</div>
                </div>
            </div>
 
            <!-- Main card -->
            <div class="hero-card-main">
                <div class="card-header-row">
                    <div class="card-title">Koleksi Buku</div>
                    <span class="card-badge-green">● Tersedia</span>
                </div>
                <div class="book-list">
                    <div class="book-item">
                        <div class="book-cover" style="background: linear-gradient(135deg, #f59e0b, #ef4444);"></div>
                        <div class="book-info">
                            <div class="book-name">Laskar Pelangi</div>
                            <div class="book-author">Andrea Hirata</div>
                        </div>
                        <span class="book-stok">14 stok</span>
                    </div>
                    <div class="book-item">
                        <div class="book-cover" style="background: linear-gradient(135deg, #3b82f6, #8b5cf6);"></div>
                        <div class="book-info">
                            <div class="book-name">Harry Potter</div>
                            <div class="book-author">J.K. Rowling</div>
                        </div>
                        <span class="book-stok">21 stok</span>
                    </div>
                    <div class="book-item">
                        <div class="book-cover" style="background: linear-gradient(135deg, #10b981, #059669);"></div>
                        <div class="book-info">
                            <div class="book-name">Laut Bercerita</div>
                            <div class="book-author">Leila S. Chudori</div>
                        </div>
                        <span class="book-stok">20 stok</span>
                    </div>
                </div>
            </div>
 
            <!-- Floating card bottom left -->
            <div class="floating-card floating-card-2">
                <div class="float-icon" style="background: #eff6ff;">📊</div>
                <div>
                    <div class="float-label">Total Peminjaman</div>
                    <div class="float-value">1,240+</div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<!-- FEATURES -->
<section class="features">
    <div class="section-label">Fitur Unggulan</div>
    <h2 class="section-title">Didesain untuk Efisiensi</h2>
    <p class="section-desc">Kelola operasional perpustakaan Anda tanpa pusing dengan fitur otomatisasi kami.</p>
 
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon" style="background: #eff6ff;">📚</div>
            <div class="feature-title">Katalog Pintar</div>
            <p class="feature-desc">Atur ribuan buku dengan sistem pencarian cepat, monitoring stok otomatis, dan manajemen koleksi yang mudah.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon" style="background: #f0fdf4;">👥</div>
            <div class="feature-title">Data Terpusat</div>
            <p class="feature-desc">Simpan data anggota dengan aman, pantau riwayat peminjaman, dan berikan akses profil personal ke setiap anggota.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon" style="background: #fef3c7;">⚡</div>
            <div class="feature-title">Denda Otomatis</div>
            <p class="feature-desc">Sistem otomatis menghitung denda keterlambatan dan memastikan pengelolaan yang adil dan transparan.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon" style="background: #fdf4ff;">🎫</div>
            <div class="feature-title">Token Verifikasi</div>
            <p class="feature-desc">Sistem token unik untuk setiap transaksi peminjaman memastikan keamanan dan validasi yang akurat.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon" style="background: #fff1f2;">📈</div>
            <div class="feature-title">Laporan Real-Time</div>
            <p class="feature-desc">Ekspor laporan peminjaman mingguan dan bulanan dalam format PDF dengan statistik lengkap.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon" style="background: #f0f9ff;">🔐</div>
            <div class="feature-title">Akses Berbasis Peran</div>
            <p class="feature-desc">Kontrol akses terpisah untuk admin dan anggota memastikan keamanan dan privasi data terjaga.</p>
        </div>
    </div>
</section>
 
<!-- STATS -->
<div style="padding: 0 60px;">
    <div class="stats">
        <div class="stats-grid">
            <div>
                <div class="stat-number">10<span>K+</span></div>
                <div class="stat-label">Koleksi Buku</div>
            </div>
            <div>
                <div class="stat-number">99<span>%</span></div>
                <div class="stat-label">Akurasi Laporan</div>
            </div>
            <div>
                <div class="stat-number">24<span>/7</span></div>
                <div class="stat-label">Akses Kapan Saja</div>
            </div>
        </div>
    </div>
</div>
 
<!-- CTA -->
<section class="cta">
    <h2 class="cta-title">Siap Mulai<br>Perjalanan Membaca?</h2>
    <p class="cta-desc">Bergabung sekarang dan nikmati kemudahan akses perpustakaan digital.</p>
    <a href="{{ route('register') }}" class="btn-hero-primary" style="font-size: 16px; padding: 16px 36px;">
        Daftar Gratis Sekarang →
    </a>
</section>
 
<!-- FOOTER -->
<footer>
    <div class="nav-logo">
        <div class="nav-logo-icon">📚</div>
        <span class="nav-logo-text">Library<span class="nav-logo-dot">.</span></span>
    </div>
    <div class="footer-text">© 2026 Library. Perpustakaan Digital.</div>
</footer>
 
</body>
</html>
