<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian'; 
    protected $fillable = [
        'alternatif_id',
        'kriteria_id',
        'nilai',
    ];

    // Relasi dengan model DataAlternatif
    public function alternatif()
    {
        return $this->belongsTo(DataAlternatif::class, 'alternatif_id');
    }

    // Relasi dengan model Kriteria
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id');
    }
}
