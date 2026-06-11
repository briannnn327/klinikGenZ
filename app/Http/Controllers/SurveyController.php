<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Pasien;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::with('pasien')->get();
        return view('survey.index', compact('surveys'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        return view('survey.create', compact('pasiens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id'       => 'required',
            'nilai_pelayanan' => 'required|numeric|min:1|max:5',
            'nilai_dokter'    => 'required|numeric|min:1|max:5',
            'nilai_fasilitas' => 'required|numeric|min:1|max:5',
        ]);

        Survey::create($request->all());
        return redirect('/survey')->with('success', 'Survey berhasil dikirim!');
    }
}