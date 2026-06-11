<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Klinik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .box { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #2c7be5; margin-bottom: 25px; }
        input { width: 100%; padding: 10px; margin: 8px 0 15px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 15px; }
        button:hover { background: #218838; }
        p { text-align: center; margin-top: 15px; }
        a { color: #2c7be5; }
    </style>
</head>
<body>
<div class="box">
    <h2>📝 Daftar Akun</h2>
    <form action="/register" method="POST">
        @csrf
        <label>Nama Lengkap</label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama lengkap">
        @error('name') <span style="color:red">{{ $message }}</span> @enderror

        <label>Username</label>
        <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
        @error('username') <span style="color:red">{{ $message }}</span> @enderror

        <label>Password</label>
        <input type="password" name="password" placeholder="Min. 6 karakter">
        @error('password') <span style="color:red">{{ $message }}</span> @enderror

        <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="/login">Login</a></p>
</div>
</body>
</html>