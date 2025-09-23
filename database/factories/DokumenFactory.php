<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\tps;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokumen>
 */
class DokumenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_tps' => tps::factory(),
            'jenis_dokumen' => $this->faker->randomElement(['PPWP', 'DPRRI', 'DPD', 'DPRDP', 'DPRDK']),
            'file_path' => $this->faker->randomElement([
                'private\dokumen\Laptop.pdf',
                'private\dokumen\CV_AKHMAD FANNY FADHILLA 2.pdf'
            ]), // Generate a random file
        ];
    }

    public function withJenis($jenis)
    {
        return $this->state(fn () => ['jenis_dokumen' => $jenis]);
    }
}
