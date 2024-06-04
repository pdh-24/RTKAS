<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataAlternatif;

class DataAlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataAlternatif = [
            ['nama_alternatif' => 'Dana gotong royong bulanan'],
            ['nama_alternatif' => 'Dana Darurat untuk bantuan krisis'],
            ['nama_alternatif' => 'Dana untuk acara HUT RI'],
            ['nama_alternatif' => 'Dana untuk program kebersihan bulanan'],
            ['nama_alternatif' => 'Dana untuk pengadaan peralatan untuk RT'],
            ['nama_alternatif' => 'Biaya operasional rapat RT'],
            ['nama_alternatif' => 'Biaya operasional PKK'],
            ['nama_alternatif' => 'Dana untuk pelatihan workshop RT'],
            ['nama_alternatif' => 'Dana untuk kegiatan sosial'],
            ['nama_alternatif' => 'Dana untuk pembangunan infrastruktur RT'],
        ];

        foreach ($dataAlternatif as $data) {
            DataAlternatif::create($data);
        }
    }
}
