<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penilaian;
use App\Models\DataAlternatif;
use App\Models\Kriteria;

class PenilaianSeeder extends Seeder
{
    /**
     * Menjalankan penanaman data ke database.
     *
     * @return void
     */
    public function run()
    {
        $dataAlternatif = DataAlternatif::all();
        $dataKriteria = Kriteria::all();

        foreach ($dataAlternatif as $alternatif) {
            foreach ($dataKriteria as $kriteria) {
                Penilaian::create([
                    'alternatif_id' => $alternatif->id,
                    'kriteria_id' => $kriteria->id,
                    'nilai' => rand(1, 100), // Menggunakan nilai acak sebagai contoh
                ]);
            }
        }
    }
}
