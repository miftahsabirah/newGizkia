<?php

namespace Database\Seeders;

use App\Models\Datadusun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatadusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Datadusun::factory(5)->create();
    }
}
