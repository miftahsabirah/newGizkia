<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jenisfaktor>
 */
class JenisfaktorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'faktor1' => $this->faker->numberBetween(0, 1),
            'faktor2' => $this->faker->numberBetween(0, 1),
            'faktor3' => $this->faker->numberBetween(0, 1),
            'faktor4' => $this->faker->numberBetween(0, 1),
            'faktor5' => $this->faker->numberBetween(0, 1),
            'faktor6' => $this->faker->numberBetween(0, 1),
        ];
    }
}
