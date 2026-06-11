<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Isi Survey</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; margin: 0; }
        nav { background: #2c7be5; padding: 15px 30px; color: white; display: flex; justify-content: space-between; }
        nav a { color: white; text-decoration: none; margin-left: 20px; }
        .container { padding: 30px; max-width: 550px; }
        h2 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        select, textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { padding: 12px 30px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 15px; }
        .error { color: red; font-size: 13px; }
        .star-label { font-size: 13px; color: #888; margin-left: 5px; }
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
    <h2>📊 Survey Kepuasan Pasien</h2>
    <form action="/survey" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Pasien</label>
            <select name="pasien_id">
                <option value="">-- Pilih Pasien --</option>
                @foreach($pasiens as $p)
                    <option value="{{ $p->id }}" {{ old('pasien_id')==$p->id?'selected':'' }}>
                        {{ $p->nama_lengkap }}
                    </option>
                @endforeach
            </select>
            @error('pasien_id') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Nilai Pelayanan <span class="star-label">(1=Buruk, 5=Sangat Baik)</span></label>
            <select name="nilai_pelayanan">
                <option value="">-- Pilih --</option>
                @for($i=1;$i<=5;$i++)
                    <option value="{{ $i }}" {{ old('nilai_pelayanan')==$i?'selected':'' }}>{{ $i }} ⭐</option>
                @endfor
            </select>
            @error('nilai_pelayanan') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Nilai Dokter <span class="star-label">(1=Buruk, 5=Sangat Baik)</span></label>
            <select name="nilai_dokter">
                <option value="">-- Pilih --</option>
                @for($i=1;$i<=5;$i++)
                    <option value="{{ $i }}" {{ old('nilai_dokter')==$i?'selected':'' }}>{{ $i }} ⭐</option>
                @endfor
            </select>
            @error('nilai_dokter') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Nilai Fasilitas <span class="star-label">(1=Buruk, 5=Sangat Baik)</span></label>
            <select name="nilai_fasilitas">
                <option value="">-- Pilih --</option>
                @for($i=1;$i<=5;$i++)
                    <option value="{{ $i }}" {{ old('nilai_fasilitas')==$i?'selected':'' }}>{{ $i }} ⭐</option>
                @endfor
            </select>
            @error('nilai_fasilitas') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Komentar (opsional)</label>
            <textarea name="komentar" rows="3" placeholder="Tuliskan komentar...">{{ old('komentar') }}</textarea>
        </div>
        <button type="submit">Kirim Survey</button>
    </form>
</div>
</body>
</html>