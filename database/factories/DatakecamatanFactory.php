<?php

namespace Database\Factories;

use App\Models\Datakecamatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datakecamatan>
 */
class DatakecamatanFactory extends Factory
{
    protected $model = Datakecamatan::class;

    public function definition(): array
    {
        return [
            'kode_kecamatan' => $this->faker->unique()->randomNumber(2),
            'kecamatan' => $this->faker->city,
        ];
    }
}
