<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Klinik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; margin: 0; }
        nav { background: #2c7be5; padding: 15px 30px; color: white; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: white; text-decoration: none; margin-left: 20px; }
        nav a:hover { text-decoration: underline; }
        .container { padding: 30px; }
        h2 { color: #333; }
        .cards { display: flex; gap: 20px; margin-top: 20px; flex-wrap: wrap; }
        .card { background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); min-width: 180px; text-align: center; }
        .card h3 { margin: 0; font-size: 40px; color: #2c7be5; }
        .card p { margin: 5px 0 0; color: #666; }
        .menu { display: flex; gap: 15px; margin-top: 30px; flex-wrap: wrap; }
        .menu a { background: #2c7be5; color: white; padding: 12px 25px; border-radius: 8px; text-decoration: none; font-size: 15px; }
        .menu a:hover { background: #1a68d1; }
    </style>
</head>
<body>
<nav>
    <strong>🏥 Sistem Klinik</strong>
    <div>
        <a href="/dashboard">Dashboard</a>
        <a href="/pasien">Data Pasien</a>
        <a href="/antrian">Antrian</a>
        <a href="/survey">Survey</a>
        <a href="/logout">Logout</a>
    </div>
</nav>
<div class="container">
    <h2>Selamat Datang di Sistem Manajemen Klinik 👋</h2>
    <div class="cards">
        <div class="card">
            <h3>{{ $totalPasien }}</h3>
            <p>Total Pasien Terdaftar</p>
        </div>
        <div class="card">
            <h3>{{ $totalAntrian }}</h3>
            <p>Antrian Menunggu Hari Ini</p>
        </div>
    </div>
    <div class="menu">
        <a href="/pasien/daftar">➕ Daftar Pasien Baru</a>
        <a href="/antrian">📋 Lihat Antrian</a>
        <a href="/survey/isi">📊 Isi Survey</a>
    </div>
</div>
</body>
</html>