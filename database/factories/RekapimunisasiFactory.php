<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekapimunisasi>
 */
class RekapimunisasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bcg' => $this->faker->date,
            'dpt_1' => $this->faker->date,
            'dpt_2' => $this->faker->date,
            'dpt_3' => $this->faker->date,
            'polio_1' => $this->faker->date,
            'polio_2' => $this->faker->date,
            'polio_3' => $this->faker->date,
            'ipv' => $this->faker->date,
            'campak' => $this->faker->date,
            'boosterpentavalen' => $this->faker->date,
            'boostercampak' => $this->faker->date,
            'hepatitis_0' => $this->faker->date,
            'hepatitis_1' => $this->faker->date,
            'hepatitis_2' => $this->faker->date,
            'hepatitis_3' => $this->faker->date,
            'noe_natal_1' => $this->faker->date,
            'noe_natal_2' => $this->faker->date,
            'noe_natal_3' => $this->faker->date,
        ];
    }
}
