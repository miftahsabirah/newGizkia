<?php

namespace Database\Seeders;

use App\Models\Periksabumil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksabumilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksabumil::factory(50)->create();
    }
}
