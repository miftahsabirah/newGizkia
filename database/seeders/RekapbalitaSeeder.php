<?php

namespace Database\Seeders;

use App\Models\Rekapbalita;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekapbalitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rekapbalita::factory(50)->create();
    }
}
