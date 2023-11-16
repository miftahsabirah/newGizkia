<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penyakit>
 */
class PenyakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asfiksia' => $this->faker->randomNumber(2),
            'hipotermi' => $this->faker->randomNumber(2),
            'infeksi' => $this->faker->randomNumber(2),
            'tetanus' => $this->faker->randomNumber(2),
            'bblr' => $this->faker->randomNumber(2),
            'komplikasi_lain' => $this->faker->randomNumber(2),
        ];
    }
}
