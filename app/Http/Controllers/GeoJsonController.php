<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeoJsonController extends Controller
{
    public function geojson(string $table)
    {
        try {
            $result = Helper::getGeoJson($table);
            return response()->json($result);
        } catch (\Throwable $th) {
            return abort(500);
        }
    }

    public function peta(Request $request)
    {
        // $layer_umkm = Helper::getGeoJson('umkm');
        // $layer_update = Helper::getGeoJson('update_september21');

        $user = $request->user();
        return view('frontend/layouts2/peta', [
            // 'hasTestimoni' => Testimoni::where('email', $user->email)->exists(),
            // 'layer_umkm' => $layer_umkm,
            // 'layer_update' => $layer_update,
        ]);

        // return view('public.peta', compact('layer_aksesoris', 'layer_update'));
    }
}
