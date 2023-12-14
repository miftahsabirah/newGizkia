<?php

namespace Database\Factories;

use App\Models\Penyakit;
use App\Models\Posyandu;
use App\Models\Rekapbalita;
use App\Models\Rekapimunisasi;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Databayi;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Databayi>
 */
class DatabayiFactory extends Factory
{
    protected $model = Databayi::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $posyandu = Posyandu::inRandomOrder()->first();
        return [
            'no_index_balita' => $this->faker->unique()->numberBetween(100000000000000000, 999999999999999999),
            'kode_posyandu' => function () {
                return Posyandu::inRandomOrder()->first()->kode_posyandu;
            },
            'id_rekapimunisasi' => function () {
                return Rekapimunisasi::inRandomOrder()->first()->id;
            },
            'id_rekapbalita' => function () {
                return Rekapbalita::inRandomOrder()->first()->id;
            },
            'penyakit' => function () {
                return Penyakit::inRandomOrder()->first()->id;
            },

            'no_index' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'akte' => $this->faker->numberBetween(100000, 999999),
            'nokk' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nama_bayi' => $this->faker->firstName,
            'tanggal_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'nama_ibu' => $this->faker->firstNameFemale,
            'nama_ayah' => $this->faker->firstNameMale,
            'gakin' => $this->faker->numberBetween(0, 1),
            'rt' => $this->faker->numberBetween(1, 99),
            'rw' => $this->faker->numberBetween(1, 99),
            'tb_terakhir' => $this->faker->randomFloat(2, 30, 100),
            'bb_terakhir' => $this->faker->randomFloat(2, 3, 20),
            'tanggal_timbang_terakhir' => $this->faker->date,
            'stunting' => $this->faker->numberBetween(0, 1),
            'cekidl' => $this->faker->numberBetween(0, 1),
            'cekbadutq' => $this->faker->numberBetween(0, 1),
            'status_bbu' => $this->faker->randomElement(['A', 'B', 'C']),
            'status_tbu' => $this->faker->randomElement(['A', 'B', 'C']),
            'status_bbtb' => $this->faker->randomElement(['A', 'B', 'C']),
            'tanggal_register' => $this->faker->date,
            'kode_tempat' => $this->faker->randomElement(['A', 'B', 'C']),
            'alamat' => implode(' ', $this->faker->words(10)),
            'kode_wilayah' => $this->faker->randomElement(['A', 'B', 'C']),
            'dirujuk' => $this->faker->randomElement(['A', 'B', 'C']),
            'no_telepon_ortu' => $this->faker->phoneNumber,
            'kode_suku' => $this->faker->randomElement(['A', 'B', 'C']),
            'nik' => $this->faker->unique()->numberBetween(1000000000000000, 9999999999999999),
            'no_kartu' => $this->faker->unique()->numberBetween(1000000000000000, 9999999999999999),
            'nik_ibu' => $this->faker->unique()->numberBetween(1000000000000000, 9999999999999999),
            'anak_ke' => $this->faker->numberBetween(1, 10),
            'hb024' => $this->faker->numberBetween(80, 180),
            'bayi_id' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'bayi_kategori' => $this->faker->randomElement(['A', 'B', 'C']),
            'aktif' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
