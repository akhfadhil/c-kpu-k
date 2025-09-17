<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Desa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tps>
 */
class tpsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_desa' => Desa::factory(),
            'kode' => 'TPS-' . fake()->unique()->numerify('###'), // kode TPS, misalnya "TPS-001"
            'lokasi_deskripsi' => fake()->address(), // alamat/lokasi TPS
            'jumlah_pemilih' => fake()->numberBetween(100, 500) // jumlah pemilih di TPS
        ];
    }
}
