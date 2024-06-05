<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kriteria;


class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kriteria::create([
            'kode' => 'C1',
            'nama' => 'Tingkat Kepuasan Warga',
            'bobot' => 0.3,
            'jenis' => 'Benefit'
        ]);

        Kriteria::create([
            'kode' => 'C2',
            'nama' => 'Efisien',
            'bobot' => 0.2,
            'jenis' => 'Benefit'
        ]);

        Kriteria::create([
            'kode' => 'C3',
            'nama' => 'Partisipasi Warga',
            'bobot' => 0.2,
            'jenis' => 'Benefit'
        ]);

        Kriteria::create([
            'kode' => 'C4',
            'nama' => 'Tingkat Darurat',
            'bobot' => 0.3,
            'jenis' => 'Benefit'
        ]);

        Kriteria::create([
            'kode' => 'C5',
            'nama' => 'Jumlah Biaya',
            'bobot' => 0.15,
            'jenis' => 'Cost'
        ]);
    }
}
