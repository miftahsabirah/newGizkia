<?php

namespace Database\Seeders;

use App\Models\Jenisfaktor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisfaktorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jenisfaktor::factory(50)->create();
    }
}
