<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
        'pasien_id', 'nilai_pelayanan',
        'nilai_dokter', 'nilai_fasilitas', 'komentar'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}