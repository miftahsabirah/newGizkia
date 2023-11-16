<?php

namespace Database\Seeders;

use App\Models\Rekapimunisasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekapimunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rekapimunisasi::factory(50)->create();
    }
}
