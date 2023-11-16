<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periksabumil>
 */
class PeriksabumilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal_periksa' => $this->faker->date,
            'jenis_periksa' => $this->faker->randomElement(['A', 'B', 'C']),
            'tempat_periksa' => $this->faker->word,
            'luar_gedung' => $this->faker->numberBetween(0, 1),
            'kode_petugas' => $this->faker->word,
            'umur_kehamilan' => $this->faker->numberBetween(1, 9),
            'keluhan' => $this->faker->sentence(6),
            'lila' => $this->faker->randomFloat(2, 1, 10),
            'sistole' => $this->faker->numberBetween(60, 140),
            'diastole' => $this->faker->numberBetween(40, 90),
            'hb' => $this->faker->randomFloat(2, 5, 20),
            'berad_badan' => $this->faker->randomFloat(2, 30, 100),
            'tinggi_fundus' => $this->faker->randomFloat(2, 10, 40),
            'jumlah_janin' => $this->faker->numberBetween(1, 3),
            'letak_janin' => $this->faker->randomElement(['A', 'B', 'C']),
            'posisi_janin' => $this->faker->randomElement(['A', 'B', 'C']),
            'denyut_janin' => $this->faker->numberBetween(120, 160),
            'lab' => $this->faker->randomElement(['A', 'B', 'C']),
            'yodium' => $this->faker->numberBetween(0, 1),
            'posisitbj' => $this->faker->randomElement(['A', 'B', 'C']),
            'tbj' => $this->faker->randomFloat(2, 20, 40),
            'kodefe' => $this->faker->word,
            'jumlahfe' => $this->faker->numberBetween(1, 5),
            'obatcacing' => $this->faker->numberBetween(0, 1),
            'tt4' => $this->faker->numberBetween(0, 1),
            'tt5' => $this->faker->numberBetween(0, 1),
            'hbsag' => $this->faker->numberBetween(0, 1),
            'rapid_test' => $this->faker->numberBetween(0, 1),
            'protein_urine' => $this->faker->randomElement(['A', 'B', 'C']),
            'gds' => $this->faker->numberBetween(70, 200),
            'ims' => $this->faker->numberBetween(0, 1),
            'nama' => $this->faker->firstName,
        ];
    }
}
