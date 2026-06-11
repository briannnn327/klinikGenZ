<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama_lengkap', 'nik', 'no_hp',
        'alamat', 'tanggal_lahir', 'jenis_kelamin', 'keluhan'
    ];
}