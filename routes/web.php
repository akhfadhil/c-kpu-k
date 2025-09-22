<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\TpsController;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\TPS;
use App\Http\Controllers\PdfController;

// Homepage
Route::get("/", function () {
    return view("home", [
        "title" => "Homepage",
        "kecamatan" => Kecamatan::all()
    ]);
});

// API to get villages based on selected district
Route::get('/get-desa-by-kecamatan/{id_kecamatan}', [LocationController::class, 'getDesaByKecamatan']);

// Kecamatan
Route::get('/kecamatan/{kecamatanId}', [KecamatanController::class, 'show'])->name('kecamatan.show');

// This route will handle the redirection from the JavaScript
// Desa
Route::get('/desa/{desaId}', [DesaController::class, 'show'])->name('desa.show');

// TPS
Route::get('/tps/{id}', [TpsController::class, 'show'])->name('tps.show');

// routes/web.php
Route::get('/view-pdf', [PdfController::class, 'show'])->name('view.pdf');

Route::get("/pdf", function () {
    return view("pdf_viewer", [
        "title" => "Homepage"
    ]);
});