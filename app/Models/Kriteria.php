<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria'; // Nama tabel dalam database

    protected $fillable = ['kode', 'nama', 'bobot', 'jenis']; // Kolom yang dapat diisi secara massal

    // Tambahkan metode atau relasi sesuai kebutuhan aplikasi Anda

    public function subKriteria()
    {
        return $this->hasMany(SubKriteria::class, 'kriteria_id');
    }

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'kriteria_id');
    }
}
