<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JenisRisti>
 */
class JenisRistiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resiko1' => $this->faker->numberBetween(0, 1),
            'resiko2' => $this->faker->numberBetween(0, 1),
            'resiko3' => $this->faker->numberBetween(0, 1),
            'resiko4' => $this->faker->numberBetween(0, 1),
            'resiko5' => $this->faker->numberBetween(0, 1),
            'resiko6' => $this->faker->numberBetween(0, 1),
            'resiko7' => $this->faker->numberBetween(0, 1),
            'resiko8' => $this->faker->numberBetween(0, 1),
            'resiko9' => $this->faker->numberBetween(0, 1),
            'resiko10' => $this->faker->numberBetween(0, 1),
            'resiko11' => $this->faker->numberBetween(0, 1),
        ];
    }
}
