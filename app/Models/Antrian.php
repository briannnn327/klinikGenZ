<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $fillable = ['pasien_id', 'nomor_antrian', 'tanggal', 'status'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}