<?php

namespace Database\Seeders;

use App\Models\Datakecamatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatakecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Datakecamatan::factory(10)->create();
    }
}
