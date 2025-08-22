<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Kecamatan {

    public static function all() {
        return [
            ["id_kecamatan" => "1", "nama" => "Bangorejo"],
            ["id_kecamatan" => "2", "nama" => "Banyuwangi"],
            ["id_kecamatan" => "3", "nama" => "Blimbingsari"],
            ["id_kecamatan" => "4", "nama" => "Cluring"],
            ["id_kecamatan" => "5", "nama" => "Gambiran"],
            ["id_kecamatan" => "6", "nama" => "Genteng"],
            ["id_kecamatan" => "7", "nama" => "Giri"],
            ["id_kecamatan" => "8", "nama" => "Glagah"],
            ["id_kecamatan" => "9", "nama" => "Glenmore"],
            ["id_kecamatan" => "10", "nama" => "Kabat"],
            ["id_kecamatan" => "11", "nama" => "Kalibaru"],
            ["id_kecamatan" => "12", "nama" => "Kalipuro"],
            ["id_kecamatan" => "13", "nama" => "Licin"],
            ["id_kecamatan" => "14", "nama" => "Muncar"],
            ["id_kecamatan" => "15", "nama" => "Pesanggaran"],
            ["id_kecamatan" => "16", "nama" => "Purwoharjo"],
            ["id_kecamatan" => "17", "nama" => "Rogojampi"],
            ["id_kecamatan" => "18", "nama" => "Sempu"],
            ["id_kecamatan" => "19", "nama" => "Siliragung"],
            ["id_kecamatan" => "20", "nama" => "Singojuruh"],
            ["id_kecamatan" => "21", "nama" => "Songgon"],
            ["id_kecamatan" => "22", "nama" => "Srono"],
            ["id_kecamatan" => "23", "nama" => "Tegaldlimo"],
            ["id_kecamatan" => "24", "nama" => "Tegalsari"],
            ["id_kecamatan" => "25", "nama" => "Wongsorejo"]
        ];
    }

    public static function find($id) {

        $kecamatan = Arr::first(static::all(), function ($item) use ($id) {
            return $item ["id_kecamatan"] == $id;
        });

        if(!$kecamatan) {
            abort(404, "Kecamatan tidak ditemukan.");
        }

        return $kecamatan ? $kecamatan : null;

    }

}