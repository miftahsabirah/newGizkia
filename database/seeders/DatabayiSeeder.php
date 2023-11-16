<?php

namespace Database\Seeders;

use App\Models\Databayi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabayiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Databayi::factory(50)->create();
    }
}
