<?php

namespace Database\Factories;

use App\Models\Posyandu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Infoawalbumil>
 */
class InfoawalbumilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_indek_infobumil' => $this->faker->unique()->numberBetween(100000000000000000, 999999999999999999),
            'kode_posyandu' => function () {
                return Posyandu::inRandomOrder()->first()->kode_posyandu;
            },
            'tgl_informasi' => $this->faker->date,
            'nama' => $this->faker->firstName,
            'suami' => $this->faker->firstName,
            'alamat' => $this->faker->address,
            'user_id_pelapor' => $this->faker->uuid,
            'verifikasi' => $this->faker->randomElement(['Y', 'N']),
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'no_telepon' => $this->faker->phoneNumber,
        ];
    }
}
