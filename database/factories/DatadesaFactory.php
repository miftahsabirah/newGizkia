<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Datadesa;
use App\Models\Datakecamatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datadesa>
 */
class DatadesaFactory extends Factory
{
    protected $model = Datadesa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_desa' => $this->faker->unique()->regexify('[A-Z0-9]{11}'),
            'users_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'kode_kecamatan' => function () {
                return Datakecamatan::inRandomOrder()->first()->kode_kecamatan;
            },
            'desa' => $this->faker->unique()->city,
            'wilayah' => $this->faker->numberBetween(1, 10),
            'jumlah_dusun' => $this->faker->numberBetween(1, 5),
            'luas' => $this->faker->numberBetween(100, 1000),
            'penduduk' => $this->faker->numberBetween(1000, 10000),
            'kode_pkm' => $this->faker->unique()->regexify('[A-Z]{2}'),
        ];
    }
}
