<?php

namespace Database\Seeders;

use App\Models\Infoawalbumil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoawalbumilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Infoawalbumil::factory(50)->create();
    }
}
