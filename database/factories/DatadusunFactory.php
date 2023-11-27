<?php

namespace Database\Factories;

use App\Models\Datadusun;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datadusun>
 */
class DatadusunFactory extends Factory
{
    protected $model = Datadusun::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_dusun' => $this->faker->unique()->numberBetween(10000000000000, 99999999999999),
            'nama' => $this->faker->word,
            'dusun' => $this->faker->word,
            'jumlah_penduduk' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
