<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Kecamatan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desa>
 */
class DesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kecamatan' => Kecamatan::factory(),
            'nama_desa' => fake()->unique()->streetName()
        ];
    }
}