<?php

namespace Database\Seeders;

use App\Models\Databumil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabumilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Databumil::factory(50)->create();
    }
}
