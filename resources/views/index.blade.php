<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik GEN-Z | Pendaftaran Antrean Online</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; overflow-x: hidden; }
        .navbar { transition: all 0.3s ease; }
        .navbar-brand { font-weight: 700; color: #0d6efd !important; }
        .hero-section { background-color: #EAF5FF; min-height: 85vh; display: flex; align-items: center; padding-top: 80px; }
        .hero-title { font-weight: 700; font-size: 3rem; color: #2c3e50; margin-bottom: 1.5rem; }
        .hero-text { font-size: 1.1rem; color: #546e7a; margin-bottom: 2rem; line-height: 1.6; }
        .hover-card { border-radius: 20px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; background: #ffffff; height: 100%; }
        .hover-card:hover { transform: translateY(-8px); box-shadow: 0 12px 25px rgba(13, 110, 253, 0.15); }
        .icon-box { width: 70px; height: 70px; border-radius: 15px; background: #EAF5FF; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: #0d6efd; margin-bottom: 1.5rem; }
        .timeline-step { position: relative; padding: 2rem; text-align: center; z-index: 1; }
        .step-number { width: 50px; height: 50px; border-radius: 50%; background: #0d6efd; color: white; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 600; margin: 0 auto 1.5rem auto; box-shadow: 0 4px 10px rgba(13, 110, 253, 0.3); }
        @media (min-width: 992px) {
            .timeline-row { position: relative; }
            .timeline-row::before { content: ''; position: absolute; top: 55px; left: 10%; right: 10%; height: 3px; background: #e9ecef; z-index: 0; }
        }
        .cta-section { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); border-radius: 30px; margin: 5rem auto; box-shadow: 0 15px 30px rgba(13, 110, 253, 0.2); }
        footer { background-color: #f8f9fa; color: #495057; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <i class="bi bi-hospital text-primary fs-3"></i>
                Klinik GEN-Z
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#keunggulan">Keunggulan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#alur">Alur Pendaftaran</a></li>
                </ul>
                <div class="d-flex gap-2 align-items-center">
                    @if(!session()->has('user'))
                        <a href="{{ url('/login') }}" class="btn btn-outline-primary px-4 rounded-pill">Login</a>
                        <a href="{{ url('/register') }}" class="btn btn-primary px-4 rounded-pill">Register</a>
                    @else
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary px-4 rounded-pill">
                            <i class="bi bi-speedometer2 me-2"></i>Dashboard
                        </a>
                        <a href="{{ url('/logout') }}" class="btn btn-outline-danger px-4 rounded-pill">Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">
                        <i class="bi bi-capsule me-2"></i>Sistem Informasi Kesehatan Digital
                    </span>
                    <h1 class="hero-title">Selamat Datang di <br><span class="text-primary">Klinik GEN-Z</span></h1>
                    <p class="hero-text">
                        Daftarkan diri Anda secara online, pilih poliklinik, dan dapatkan nomor antrean kapan saja dan di mana saja. Kesehatan Anda adalah prioritas kami.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ url('/register') }}" class="btn btn-primary btn-lg px-4 py-3 rounded-pill shadow-sm">
                            <i class="bi bi-person-plus me-2"></i>Daftar Sekarang
                        </a>
                        <a href="#layanan" class="btn btn-outline-secondary btn-lg px-4 py-3 rounded-pill">
                            Lihat Layanan
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="https://i.pinimg.com/736x/06/49/9b/06499b96d5228b6c7ac771e054bc2869.jpg" 
                    alt="Ilustrasi Dokter Klinik GEN-Z" 
                    class="img-fluid rounded-4 shadow-lg" 
                    style="max-width: 90%;">
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">LAYANAN POLI KLINIK</h2>
                <p class="text-muted">Tersedia 6 poli klinik yang siap melayani kebutuhan kesehatan Anda</p>
            </div>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col" data-aos="fade-up" data-aos-delay="100"><div class="card hover-card p-4 text-center"><div class="d-flex justify-content-center"><div class="icon-box"><i class="bi bi-heart-pulse"></i></div></div><h4 class="fw-bold mb-3">Poli Umum</h4></div></div>
                <div class="col" data-aos="fade-up" data-aos-delay="200"><div class="card hover-card p-4 text-center"><div class="d-flex justify-content-center"><div class="icon-box"><i class="bi bi-emoji-smile"></i></div></div><h4 class="fw-bold mb-3">Poli Gigi</h4></div></div>
                <div class="col" data-aos="fade-up" data-aos-delay="300"><div class="card hover-card p-4 text-center"><div class="d-flex justify-content-center"><div class="icon-box"><i class="bi bi-person-hearts"></i></div></div><h4 class="fw-bold mb-3">Poli Anak</h4></div></div>
                <div class="col" data-aos="fade-up" data-aos-delay="400"><div class="card hover-card p-4 text-center"><div class="d-flex justify-content-center"><div class="icon-box"><i class="bi bi-eye"></i></div></div><h4 class="fw-bold mb-3">Poli Mata</h4></div></div>
                <div class="col" data-aos="fade-up" data-aos-delay="500"><div class="card hover-card p-4 text-center"><div class="d-flex justify-content-center"><div class="icon-box"><i class="bi bi-heart"></i></div></div><h4 class="fw-bold mb-3">Poli Jantung</h4></div></div>
                <div class="col" data-aos="fade-up" data-aos-delay="600"><div class="card hover-card p-4 text-center"><div class="d-flex justify-content-center"><div class="icon-box"><i class="bi bi-activity"></i></div></div><h4 class="fw-bold mb-3">Poli Saraf</h4></div></div>
            </div>
        </div>
    </section>

    <section id="keunggulan" class="py-5 bg-light mt-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Keunggulan Sistem Kami</h2>
                <div class="mx-auto bg-primary" style="height: 3px; width: 50px; border-radius: 5px;"></div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100"><div class="text-center p-3"><div class="icon-box mx-auto mb-3 text-white bg-primary"><i class="bi bi-phone"></i></div><h5 class="fw-bold">Pendaftaran Online</h5></div></div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200"><div class="text-center p-3"><div class="icon-box mx-auto mb-3 text-white bg-primary"><i class="bi bi-clock-history"></i></div><h5 class="fw-bold">Antrean Real-Time</h5></div></div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300"><div class="text-center p-3"><div class="icon-box mx-auto mb-3 text-white bg-primary"><i class="bi bi-person-badge"></i></div><h5 class="fw-bold">Dokter Profesional</h5></div></div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400"><div class="text-center p-3"><div class="icon-box mx-auto mb-3 text-white bg-primary"><i class="bi bi-shield-check"></i></div><h5 class="fw-bold">Data Aman</h5></div></div>
            </div>
        </div>
    </section>

    <section id="alur" class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Alur Pendaftaran</h2>
            </div>
            
            <div class="row timeline-row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100"><div class="timeline-step"><div class="step-number">1</div><h5 class="fw-bold">Registrasi</h5></div></div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200"><div class="timeline-step"><div class="step-number">2</div><h5 class="fw-bold">Login</h5></div></div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300"><div class="timeline-step"><div class="step-number">3</div><h5 class="fw-bold">Pilih Poli</h5></div></div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400"><div class="timeline-step"><div class="step-number">4</div><h5 class="fw-bold">Dapatkan Nomor</h5></div></div>
            </div>
        </div>
    </section>

    <section class="container" data-aos="zoom-in">
        <div class="cta-section text-center p-5">
            <h2 class="fw-bold mb-4 text-white">Siap untuk Memulai Konsultasi?</h2>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                @if(!session()->has('user'))
                    <a href="{{ url('/register') }}" class="btn btn-light btn-lg px-5 rounded-pill text-primary fw-bold shadow-sm">Mulai Konsultasi Sekarang</a>
                    <a href="{{ url('/login') }}" class="btn btn-outline-light btn-lg px-5 rounded-pill text-white border-white">Sudah punya akun? Login</a>
                @else
                    <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg px-5 rounded-pill text-primary fw-bold shadow-sm">Buka Dashboard</a>
                @endif
            </div>
        </div>
    </section>

    <footer class="pt-5 pb-3 border-top mt-5">
        <div class="container text-center">
            <p class="text-muted mb-0">&copy; {{ date('Y') }} Klinik GEN-Z. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50 });
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) navbar.classList.add('shadow');
            else navbar.classList.remove('shadow');
        });
    </script>
</body>
</html>