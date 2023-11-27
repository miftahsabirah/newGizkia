<?php

namespace Database\Seeders;

use App\Models\Datadesa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatadesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Datadesa::factory(10)->create();
    }
}
