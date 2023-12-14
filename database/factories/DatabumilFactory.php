<?php

namespace Database\Factories;

use App\Models\Infoawalbumil;
use App\Models\Jenisristi;
use App\Models\Jenisfaktor;
use App\Models\Periksabumil;
use App\Models\Jenispenyakit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Databumil>
 */
class DatabumilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_index_bumil' => $this->faker->unique()->numberBetween(100000000000000000, 999999999999999999),
            'id_jenispenyakit' => function () {
                return Jenispenyakit::inRandomOrder()->first()->id;
            },
            'id_no_index_infobumil' => function () {
                return Infoawalbumil::inRandomOrder()->first()->no_index_infobumil;
            },
            'id_jenisfaktor' => function () {
                return Jenisfaktor::inRandomOrder()->first()->id;
            },
            'id_jenisristi' => function () {
                return Jenisristi::inRandomOrder()->first()->id;
            },
            'id_periksabumil' => function () {
                return Periksabumil::inRandomOrder()->first()->id;
            },
            'tgl_register' => $this->faker->date,
            'tgl_lahir' => $this->faker->date,
            'bbawal' => $this->faker->randomFloat(2, 30, 100),
            'umur' => $this->faker->numberBetween(15, 45),
            'umur_kehamilan' => $this->faker->numberBetween(1, 40),
            'jenis_persalinan' => $this->faker->randomElement(['A', 'B', 'C']),
            'no_telepon_istri' => $this->faker->phoneNumber,
            'htp' => $this->faker->date,
            'jenisristi' => $this->faker->randomElement(['A', 'B', 'C']),
            'g' => $this->faker->numberBetween(0, 5),
            'p' => $this->faker->numberBetween(0, 5),
            'a' => $this->faker->numberBetween(0, 5),
            'lila' => $this->faker->randomFloat(2, 20, 40),
            'sistole_akhir' => $this->faker->numberBetween(90, 160),
            'diastole_akhir' => $this->faker->randomFloat(2, 60, 90),
            'hb_akhir' => $this->faker->randomFloat(2, 8, 16),
            'rt' => $this->faker->numberBetween(1, 99),
            'rw' => $this->faker->numberBetween(1, 99),
            'tanggal_melahirkan' => $this->faker->date,
            'penolong' => $this->faker->word,
            'cara_lahir' => $this->faker->word,
            'kondisi_bayi' => $this->faker->randomElement(['Normal', 'Prematur', 'Cacat']),
            'kondisi_ibu' => $this->faker->randomElement(['Sehat', 'Sakit', 'Cacat']),
            'konseling_pasca_salin' => $this->faker->numberBetween(0, 1),
            'jenis_gakin' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
