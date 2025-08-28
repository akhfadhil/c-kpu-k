<?php

// app/Http/Controllers/DesaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desa;

class DesaController extends Controller
{
    public function show($desaId)
    {
        // $desa = Desa::find($desaId);
        $desa = Desa::with('tps')->find($desaId);

        if (!$desa) {
            abort(404);
        }

        return view('desa', [
            'desa' => $desa,
            'title' => $desa->nama_desa
        ]);
    }

}