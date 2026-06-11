<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Antrian;

class PasienController extends Controller
{
    public function dashboard()
    {
        $totalPasien  = Pasien::count();
        $totalAntrian = Antrian::where('status', 'Menunggu')->count();
        return view('dashboard', compact('totalPasien', 'totalAntrian'));
    }

    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'  => 'required',
            'nik'           => 'required|unique:pasiens',
            'no_hp'         => 'required',
            'alamat'        => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'keluhan'       => 'required',
        ]);

        $pasien = Pasien::create($request->all());

        // Auto buat nomor antrian
        $lastAntrian = Antrian::whereDate('tanggal', today())->max('nomor_antrian');
        Antrian::create([
            'pasien_id'      => $pasien->id,
            'nomor_antrian'  => ($lastAntrian ?? 0) + 1,
            'tanggal'        => today(),
            'status'         => 'Menunggu',
        ]);

        return redirect('/pasien')->with('success', 'Pendaftaran berhasil! Nomor antrian sudah dibuat.');
    }
}