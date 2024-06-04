<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubKriteria;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $subKriteriaData = [
            // Data untuk kriteria C1
            ['kriteria_id' => 1, 'no' => 1, 'rentang_skor' => 'Sangat Tidak Puas', 'nilai' => 1],
            ['kriteria_id' => 1, 'no' => 2, 'rentang_skor' => 'Tidak Puas', 'nilai' => 2],
            ['kriteria_id' => 1, 'no' => 3, 'rentang_skor' => 'Cukup Puas', 'nilai' => 3],
            ['kriteria_id' => 1, 'no' => 4, 'rentang_skor' => 'Puas', 'nilai' => 4],
            ['kriteria_id' => 1, 'no' => 5, 'rentang_skor' => 'Sangat Puas', 'nilai' => 5],

            // Data untuk kriteria C2
            ['kriteria_id' => 2, 'no' => 1, 'rentang_skor' => 'Tidak Efisien', 'nilai' => 1],
            ['kriteria_id' => 2, 'no' => 2, 'rentang_skor' => 'Cukup Efisien', 'nilai' => 2],
            ['kriteria_id' => 2, 'no' => 3, 'rentang_skor' => 'Sangat Efisien', 'nilai' => 3],

            // Data untuk kriteria C3
            ['kriteria_id' => 3, 'no' => 1, 'rentang_skor' => '<10%', 'nilai' => 1],
            ['kriteria_id' => 3, 'no' => 2, 'rentang_skor' => '10% ≤ warga < 30%', 'nilai' => 2],
            ['kriteria_id' => 3, 'no' => 3, 'rentang_skor' => '30% ≤ warga < 60%', 'nilai' => 3],
            ['kriteria_id' => 3, 'no' => 4, 'rentang_skor' => '60% ≤ warga < 90%', 'nilai' => 4],
            ['kriteria_id' => 3, 'no' => 5, 'rentang_skor' => '≥ 90%', 'nilai' => 5],

            // Data untuk kriteria C4
            ['kriteria_id' => 4, 'no' => 1, 'rentang_skor' => 'Tidak Darurat', 'nilai' => 1],
            ['kriteria_id' => 4, 'no' => 2, 'rentang_skor' => 'Tidak Terlalu Darurat', 'nilai' => 2],
            ['kriteria_id' => 4, 'no' => 3, 'rentang_skor' => 'Darurat', 'nilai' => 3],
            ['kriteria_id' => 4, 'no' => 4, 'rentang_skor' => 'Sangat Darurat', 'nilai' => 4],

            // Data untuk kriteria C5
            ['kriteria_id' => 5, 'no' => 1, 'rentang_skor' => 'Biaya > 400.000', 'nilai' => 1],
            ['kriteria_id' => 5, 'no' => 2, 'rentang_skor' => '500.000 ≤ biaya < 1.000.000', 'nilai' => 2],
            ['kriteria_id' => 5, 'no' => 3, 'rentang_skor' => '400.000 ≤ biaya < 500.000', 'nilai' => 3],
            ['kriteria_id' => 5, 'no' => 4, 'rentang_skor' => 'Biaya < 400.000', 'nilai' => 4],
        ];

        foreach ($subKriteriaData as $data) {
            SubKriteria::create($data);
        }
    }
}
