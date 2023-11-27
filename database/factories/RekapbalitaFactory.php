<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekapbalita>
 */
class RekapbalitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'umur_bayi_meniggal' => $this->faker->numberBetween(1, 24),
            'tempat_bayi_meniggal' => substr($this->faker->word, 0, 2),
            'penyebab_bayi_meniggal' => $this->faker->randomElement(['A', 'B', 'C']),
            'meniggal' => $this->faker->randomElement(['Y', 'N']),
            'tanggal_meniggal' => $this->faker->date,
            'gizi_buruk' => $this->faker->randomElement(['Y', 'N']),
            'berat_bayi' => $this->faker->randomFloat(2, 2, 10),
            'linkar_kepala' => $this->faker->randomFloat(2, 30, 50),
            'pindah' => $this->faker->randomElement(['Y', 'N']),
            'tanggal_pindah' => $this->faker->date,
            'status_tumbuh_kembang' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
