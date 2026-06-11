<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Antrian;

class AntrianController extends Controller
{
    public function index()
    {
        $antrians = Antrian::with('pasien')->orderBy('nomor_antrian')->get();
        return view('antrian.index', compact('antrians'));
    }

    public function update(Request $request, $id)
    {
        $antrian = Antrian::findOrFail($id);
        $antrian->update(['status' => $request->status]);
        return redirect('/antrian')->with('success', 'Status antrian diperbarui!');
    }
}