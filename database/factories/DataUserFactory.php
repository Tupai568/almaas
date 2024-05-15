<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->unique()->name(),
            'nama_panggilan' => $this->faker->unique()->name(),
            'alamat_rumah' => $this->faker->sentence(mt_rand(1, 2)),
            'tempat_lahir' => 'Surabaya',
            'usia' => '22',
            'gender' => 'Pria',
            'tahap' => 'Iqra',
            'whatsapp' => '085730',
            'pekerjaan' => 'Pria',
            'pendidikan' => 'Iqra',
            'program' => 'Infaq',
            'bimbingan_id' => mt_rand(1, 4),
            'jabatan_id' => mt_rand(1, 4),
            'user_id' => $this->faker->unique()->numberBetween(1, 10)
        ];
    }
}
