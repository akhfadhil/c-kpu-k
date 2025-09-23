<?php

namespace App\Http\Controllers;

use App\Models\tps;

class PdfController extends Controller
{
    public function show()
    {
        // Contoh: file ada di storage/app/public/c_hasil.pdf
        // $filePath = storage_path('public/pdf/Laptop.pdf');
        // $filePath = public_path('pdf/Laptop.pdf');
        // if (!file_exists($filePath)) {
        //     abort(404, 'File PDF tidak ditemukan');
        // }

        // return response()->file($filePath);
        return view('show');
    }

}
