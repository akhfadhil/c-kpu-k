<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DesaController;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\TPS;

Route::get("/", function () {
    return view("home", [
        "title" => "Homepage",
        "kecamatan" => Kecamatan::all()
    ]);
});

Route::get('/get-desa-by-kecamatan/{id_kecamatan}', [LocationController::class, 'getDesaByKecamatan']);

// This route will handle the redirection from the JavaScript
Route::get('/desa/{desaId}', [DesaController::class, 'show']);

// Route::get("/desa/{id}", function ($id) {

//     // Validasi ID desa
//     if (!$id || !is_numeric($id)) {
//         abort(404, "ID desa tidak valid.");
//     }

//     $daftar_tps = TPS::find($id);
//     $nama_desa = Desa::find($daftar_tps[0]["id_desa"])["nama_desa"] ?? null;
//     $nama_kecamatan = Kecamatan::find(Desa::find($daftar_tps[0]["id_desa"])["id_kecamatan"])["nama"] ?? null;

//     // Cek apakah nama desa dan daftar TPS ditemukan
//     // Jika tidak ditemukan, tampilkan pesan error 404
//     if (!$nama_desa || !$daftar_tps) {
//         abort(404, "Data desa atau TPS tidak ditemukan.");
//     }

//     return view("desa", [
//         "nama_kecamatan" => $nama_kecamatan,
//         "nama_desa" => $nama_desa,
//         "daftar_tps" => $daftar_tps,
//     ]);
// });

// Route::get("/upload", function () {
//     return view("upload", ["title" => "Upload", "name" => "KPU"]);
// });
