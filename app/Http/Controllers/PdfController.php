<?php

// app/Http/Controllers/PdfController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function show()
    {
        $path = storage_path('app\public\documents\Laptop.pdf');

        if (!file_exists($path)) {
            abort(404, 'PDF file not found.');
        }

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Laptop.pdf"'
        ]);
    }
}