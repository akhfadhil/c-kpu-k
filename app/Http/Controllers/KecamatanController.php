<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function show($id)
    {
        $kecamatan = Kecamatan::with('desa')->findOrFail($id);

        // dd($kecamatan->nama_kecamatan);
        return view('kecamatan', [
            'title' => $kecamatan->nama_kecamatan,
            'kecamatan' => $kecamatan,
        ]);

    }

}
