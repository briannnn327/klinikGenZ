<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pasien</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; margin: 0; }
        nav { background: #2c7be5; padding: 15px 30px; color: white; display: flex; justify-content: space-between; }
        nav a { color: white; text-decoration: none; margin-left: 20px; }
        .container { padding: 30px; max-width: 600px; }
        h2 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        input, select, textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { padding: 12px 30px; background: #2c7be5; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 15px; }
        .error { color: red; font-size: 13px; }
        a { color: #2c7be5; }
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
    <h2>📝 Pendaftaran Pasien Online</h2>
    <form action="/pasien" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
            @error('nama_lengkap') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" value="{{ old('nik') }}">
            @error('nik') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>No. HP</label>
            <input type="text" name="no_hp" value="{{ old('no_hp') }}">
            @error('no_hp') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3">{{ old('alamat') }}</textarea>
            @error('alamat') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            @error('tanggal_lahir') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="">-- Pilih --</option>
                <option value="Laki-laki" {{ old('jenis_kelamin')=='Laki-laki'?'selected':'' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin')=='Perempuan'?'selected':'' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Keluhan</label>
            <textarea name="keluhan" rows="3">{{ old('keluhan') }}</textarea>
            @error('keluhan') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Daftar & Ambil Nomor Antrian</button>
        <a href="/pasien" style="margin-left:15px;">Batal</a>
    </form>
</div>
</body>
</html>