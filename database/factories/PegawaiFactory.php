<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pegawai' => $this->faker->name(),
            'jenis_kelamin' => "",
            'email' => $this->faker->unique()->safeEmail(),
            'alamat' => $this->faker->address(),
        ];
    }
}
