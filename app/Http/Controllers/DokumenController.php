<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Dokumen;

class DokumenController extends Controller
{
    public function view(Dokumen $dokumen)
    {
        $path = storage_path('app/' . $dokumen->file_path);
        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$dokumen->jenis_dokumen.'.pdf"',
        ]);
    }
}
