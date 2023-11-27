<?php

namespace Database\Factories;

use App\Models\Datadesa;
use App\Models\Posyandu;
use App\Models\Datadusun;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posyandu>
 */
class PosyanduFactory extends Factory
{
    protected $model = Posyandu::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_posyandu' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'kode_desa' => function () {
                return Datadesa::inRandomOrder()->first()->kode_desa;
            },
            'kode_dusun' => function () {
                return Datadusun::inRandomOrder()->first()->kode_dusun;
            },
            'posyandu' => $this->faker->word,
            'kode_bidan' => $this->faker->unique()->numberBetween(1000000000000000000, 9999999999999999999),
            'jumlah_kader' => $this->faker->numberBetween(1, 10),
            'jenis' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
