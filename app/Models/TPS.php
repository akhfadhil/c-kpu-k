<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class tps extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_desa',
        'kode',
        'lokasi_deskripsi',
    ];

    /**
     * Hubungan (relationship) dengan model Kecamatan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa');

    }
}

// use App\Models\Tps;

// // Data TPS yang akan dimasukkan
// $tpsData = [
//     [
//         "id_desa" => 1,
//         "kode" => "TPS001",
//         "lokasi_deskripsi" => "Balai Desa Karangrejo"
//     ],
//     [
//         "id_desa" => 1,
//         "kode" => "TPS002",
//         "lokasi_deskripsi" => "SDN Karangrejo 1"
//     ],
//     [
//         "id_desa" => 1,
//         "kode" => "TPS003",
//         "lokasi_deskripsi" => "Balai Dusun Krajan"
//     ],
//     [
//         "id_desa" => 1,
//         "kode" => "TPS004",
//         "lokasi_deskripsi" => "Lapangan Desa Sumberagung"
//     ],
//     [
//         "id_desa" => 1,
//         "kode" => "TPS005",
//         "lokasi_deskripsi" => "Rumah Ketua RT 05"
//     ]
// ];

// // Periksa apakah data TPS tidak kosong
// if (empty($tpsData)) {
//     echo "Tidak ada data TPS yang disediakan.\n";
// } else {
//     // Lakukan perulangan untuk memasukkan setiap entri data
//     foreach ($tpsData as $data) {
//         Tps::create($data);
//         echo "Data TPS dengan kode '{$data['kode']}' berhasil dimasukkan.\n";
//     }

//     echo "Selesai! Semua data TPS telah berhasil dimasukkan.\n";
// }