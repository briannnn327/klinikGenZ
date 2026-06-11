<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && $request->password === $user->password) {
            session(['user' => $user]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }

    // --- TAMBAHKAN FUNGSI INI ---
    public function index()
    {
        return view('index'); // Memanggil index.blade.php yang baru dibuat
    }
}