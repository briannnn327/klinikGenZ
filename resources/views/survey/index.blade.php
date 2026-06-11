<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Survey</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; margin: 0; }
        nav { background: #2c7be5; padding: 15px 30px; color: white; display: flex; justify-content: space-between; }
        nav a { color: white; text-decoration: none; margin-left: 20px; }
        .container { padding: 30px; }
        h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        th { background: #2c7be5; color: white; padding: 12px; }
        td { padding: 10px 12px; border-bottom: 1px solid #eee; text-align: center; }
        .btn { padding: 8px 18px; background: #28a745; color: white; border-radius: 5px; text-decoration: none; }
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
    <h2>📊 Hasil Survey Kepuasan Pasien</h2>
    @if(session('success'))
        <p class="success">✅ {{ session('success') }}</p>
    @endif
    <a href="/survey/isi" class="btn" style="display:inline-block;margin-bottom:20px;">➕ Isi Survey Baru</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Pelayanan</th>
                <th>Dokter</th>
                <th>Fasilitas</th>
                <th>Rata-rata</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surveys as $i => $s)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $s->pasien->nama_lengkap }}</td>
                <td>{{ $s->nilai_pelayanan }} ⭐</td>
                <td>{{ $s->nilai_dokter }} ⭐</td>
                <td>{{ $s->nilai_fasilitas }} ⭐</td>
                <td><strong>{{ number_format(($s->nilai_pelayanan + $s->nilai_dokter + $s->nilai_fasilitas)/3, 1) }} ⭐</strong></td>
                <td>{{ $s->komentar ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>