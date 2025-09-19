<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\tps;
use Illuminate\Http\Request;

class TpsController extends Controller
{
    // public function index($idDesa)
    // {
    //     $desa = Desa::with('kecamatan')->findOrFail($idDesa);
    //     $tps = Tps::where('desa_id', $idDesa)->get();

    //     return view('tps.index', compact('desa', 'tps'));
    // }

    public function show($idTps)
    {
        $tps = tps::with('desa.kecamatan')->findOrFail($idTps);

        // dd($tps->kode);
        return view('tps', [
    'title' => $tps->kode,
    'tps' => $tps,
]);


    }
}
