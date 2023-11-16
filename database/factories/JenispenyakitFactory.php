<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jenispenyakit>
 */
class JenispenyakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jantung' => $this->faker->numberBetween(0, 1),
            'diabetes' => $this->faker->numberBetween(0, 1),
            'paru_paru' => $this->faker->numberBetween(0, 1),
            'ginjal' => $this->faker->numberBetween(0, 1),
            'hati' => $this->faker->numberBetween(0, 1),
            'kurang_darah' => $this->faker->numberBetween(0, 1),
            'malaria' => $this->faker->numberBetween(0, 1),
            'asma' => $this->faker->numberBetween(0, 1),
            'tbc' => $this->faker->numberBetween(0, 1),
            'epilepsi' => $this->faker->numberBetween(0, 1),
            'jiwa' => $this->faker->numberBetween(0, 1),
            'pms' => $this->faker->numberBetween(0, 1),
        ];
    }
}
