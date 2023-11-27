<?php

namespace Database\Seeders;

use App\Models\Posyandu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posyandu::factory(10)->create();
    }
}
