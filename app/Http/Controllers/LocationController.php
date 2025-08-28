<?php

// app/Http/Controllers/LocationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desa; // Adjust the model namespace if needed

class LocationController extends Controller
{
    public function getDesaByKecamatan($id_kecamatan)
    {
        try {
            $desa = Desa::where('id_kecamatan', $id_kecamatan)->get(['id_desa', 'nama_desa']);
            return response()->json($desa);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve villages.'], 500);
        }
    }
}