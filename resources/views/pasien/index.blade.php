<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pasien</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; margin: 0; }
        nav { background: #2c7be5; padding: 15px 30px; color: white; display: flex; justify-content: space-between; }
        nav a { color: white; text-decoration: none; margin-left: 20px; }
        .container { padding: 30px; }
        h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        th { background: #2c7be5; color: white; padding: 12px; }
        td { padding: 10px 12px; border-bottom: 1px solid #eee; }
        tr:hover { background: #f9f9f9; }
        .btn { padding: 8px 18px; background: #2c7be5; color: white; border-radius: 5px; text-decoration: none; }
        .success { color: green; margin-bottom: 15px; }
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
    <h2>📋 Data Pasien Terdaftar</h2>
    @if(session('success'))
        <p class="success">✅ {{ session('success') }}</p>
    @endif
    <a href="/pasien/daftar" class="btn" style="display:inline-block;margin-bottom:20px;">➕ Daftar Pasien Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>No. HP</th>
                <th>Jenis Kelamin</th>
                <th>Keluhan</th>
                <th>Tgl Daftar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasiens as $i => $p)
            <tr>
                <td align="center">{{ $i + 1 }}</td>
                <td>{{ $p->nama_lengkap }}</td>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->no_hp }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>{{ $p->keluhan }}</td>
                <td>{{ $p->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>