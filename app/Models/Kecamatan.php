<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kecamatan'];
}

    // protected $table = 'kecamatan';
    // protected $primaryKey = 'id_kecamatan';


    // use Illuminate\Support\Facades\DB;

// $kecamatans = [
//     ['nama_kecamatan' => 'Bangorejo'],
//     ['nama_kecamatan' => 'Banyuwangi'],
//     ['nama_kecamatan' => 'Blimbingsari'],
//     ['nama_kecamatan' => 'Cluring'],
//     ['nama_kecamatan' => 'Gambiran'],
//     ['nama_kecamatan' => 'Genteng'],
//     ['nama_kecamatan' => 'Giri'],
//     ['nama_kecamatan' => 'Glagah'],
//     ['nama_kecamatan' => 'Glenmore'],
//     ['nama_kecamatan' => 'Kabat'],
//     ['nama_kecamatan' => 'Kalibaru'],
//     ['nama_kecamatan' => 'Kalipuro'],
//     ['nama_kecamatan' => 'Licin'],
//     ['nama_kecamatan' => 'Muncar'],
//     ['nama_kecamatan' => 'Pesanggaran'],
//     ['nama_kecamatan' => 'Purwoharjo'],
//     ['nama_kecamatan' => 'Rogojampi'],
//     ['nama_kecamatan' => 'Sempu'],
//     ['nama_kecamatan' => 'Siliragung'],
//     ['nama_kecamatan' => 'Singojuruh'],
//     ['nama_kecamatan' => 'Songgon'],
//     ['nama_kecamatan' => 'Srono'],
//     ['nama_kecamatan' => 'Tegaldlimo'],
//     ['nama_kecamatan' => 'Tegalsari'],
//     ['nama_kecamatan' => 'Wongsorejo'],
// ];

// DB::table('kecamatans')->insert($kecamatans);