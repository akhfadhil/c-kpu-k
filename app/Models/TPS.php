<?php

namespace App\Models;

class TPS {
    public static function all() {

        return [
            [
                "id_tps" => 1,
                "id_desa" => 1,
                "kode" => "TPS001",
                "lokasi_deskripsi" => "Balai Desa Karangrejo",
            ],
            [
                "id_tps" => 2,
                "id_desa" => 1,
                "kode" => "TPS002",
                "lokasi_deskripsi" => "SDN Karangrejo 1",
            ],
            [
                "id_tps" => 3,
                "id_desa" => 1,
                "kode" => "TPS003",
                "lokasi_deskripsi" => "Balai Dusun Krajan",
            ],
            [
                "id_tps" => 4,
                "id_desa" => 1,
                "kode" => "TPS004",
                "lokasi_deskripsi" => "Lapangan Desa Sumberagung",
            ],
            [
                "id_tps" => 5,
                "id_desa" => 1,
                "kode" => "TPS005",
                "lokasi_deskripsi" => "Rumah Ketua RT 05",
            ],
        ];

    }

    public static function find($id) {

        $daftar_tps = array_filter(static::all(), function ($item) use ($id) {
            return $item["id_desa"] == $id;
        });

        if(!$daftar_tps) {
            abort(404, "Data TPS tidak valid.");
        }

        return $daftar_tps;

    }
}
