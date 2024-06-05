<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    protected $table = 'sub_kriteria'; 
    protected $fillable = [
        'kriteria_id', // Kolom ini mengacu pada id dari kriteria yang terkait dengan sub-kriteria
        'no', // Nomor sub-kriteria
        'rentang_skor', // Rentang skor sub-kriteria
        'nilai', // Nilai sub-kriteria
    ];

    // Relasi ke model Kriteria
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id');
    }
}
