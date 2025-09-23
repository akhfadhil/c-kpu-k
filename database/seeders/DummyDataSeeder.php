<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\tps;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // bikin 5 kecamatan
        Kecamatan::factory(5)
            ->has(
                Desa::factory(3) // tiap kecamatan punya 3 desa
                    ->has(
                        Tps::factory(2) // tiap desa punya 2 tps
                        // setiap tps otomatis punya 5 dokumen (via afterCreating di TpsFactory)
                    )
            )
            ->create();
    }
}
