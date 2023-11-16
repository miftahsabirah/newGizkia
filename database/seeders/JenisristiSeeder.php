<?php

namespace Database\Seeders;

use App\Models\Jenisristi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisristiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jenisristi::factory(50)->create();
    }
}
