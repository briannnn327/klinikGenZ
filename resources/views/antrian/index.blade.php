<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Antrian Klinik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; margin: 0; }
        nav { background: #2c7be5; padding: 15px 30px; color: white; display: flex; justify-content: space-between; }
        nav a { color: white; text-decoration: none; margin-left: 20px; }
        .container { padding: 30px; }
        h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        th { background: #2c7be5; color: white; padding: 12px; }
        td { padding: 10px 12px; border-bottom: 1px solid #eee; text-align: center; }
        .badge-menunggu  { background: #ffc107; color: #333; padding: 4px 10px; border-radius: 12px; font-size: 13px; }
        .badge-dipanggil { background: #17a2b8; color: white; padding: 4px 10px; border-radius: 12px; font-size: 13px; }
        .badge-selesai   { background: #28a745; color: white; padding: 4px 10px; border-radius: 12px; font-size: 13px; }
        select { padding: 5px; border-radius: 4px; }
        button { padding: 6px 14px; background: #2c7be5; color: white; border: none; border-radius: 4px; cursor: pointer; }
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
    <h2>🔢 Sistem Antrian Klinik</h2>
    @if(session('success'))
        <p class="success">✅ {{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>No. Antrian</th>
                <th>Nama Pasien</th>
                <th>Keluhan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Update Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($antrians as $a)
            <tr>
                <td><strong style="font-size:20px;">{{ $a->nomor_antrian }}</strong></td>
                <td>{{ $a->pasien->nama_lengkap }}</td>
                <td>{{ $a->pasien->keluhan }}</td>
                <td>{{ $a->tanggal }}</td>
                <td>
                    <span class="badge-{{ strtolower($a->status) }}">{{ $a->status }}</span>
                </td>
                <td>
                    <form action="/antrian/{{ $a->id }}/update" method="POST" style="display:flex;gap:8px;justify-content:center;">
                        @csrf
                        <select name="status">
                            <option value="Menunggu"  {{ $a->status=='Menunggu' ?'selected':'' }}>Menunggu</option>
                            <option value="Dipanggil" {{ $a->status=='Dipanggil'?'selected':'' }}>Dipanggil</option>
                            <option value="Selesai"   {{ $a->status=='Selesai'  ?'selected':'' }}>Selesai</option>
                        </select>
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>