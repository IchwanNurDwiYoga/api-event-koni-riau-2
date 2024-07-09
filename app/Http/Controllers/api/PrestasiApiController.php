<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Atlet;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiApiController extends Controller
{
    public function index($id)
    {
        $id = intval($id);
        $atlet = Atlet::where('id', $id)->first();
        $prestasi = Prestasi::whereJsonContains('atlet_id', $id)->with('event:id,nama,jenis,lokasi,foto', 'cabor:id,nama', 'nomor_pertandingan:id,nomor,gender', 'fase:id,fase')->get();
        return response()->json(['data' => ['atlet' => $atlet, 'prestasi' => $prestasi]]);
    }
}
