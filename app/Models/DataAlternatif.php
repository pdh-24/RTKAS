<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAlternatif extends Model
{
    use HasFactory;

    protected $table = 'data_alternatif';

    protected $fillable = [
        'nama_alternatif',
    ];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'alternatif_id');
    }

    public function hasPenilaian()
{
    return $this->penilaian()->exists();
}


    public function kriteria()
    {
        return $this->hasManyThrough(Kriteria::class, Penilaian::class, 'alternatif_id', 'id', 'id', 'kriteria_id');
    }
}
