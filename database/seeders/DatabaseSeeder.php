<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akun;
use App\Models\Pengurus;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Akun::factory(5)->create();
        Pengurus::factory(5)->create();

        $this->call([
            SubKriteriaSeeder::class,
            KriteriaSeeder::class,
            PenilaianSeeder::class,

        ]);
    }
}
