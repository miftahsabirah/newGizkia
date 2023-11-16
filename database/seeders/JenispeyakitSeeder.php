<?php

namespace Database\Seeders;

use App\Models\Jenispenyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenispeyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jenispenyakit ::factory(50)->create();
    }
}
