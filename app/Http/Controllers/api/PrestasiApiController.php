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
        $prestasi = Prestasi::whereJsonContains('atlet_id', $id)
            ->join('cabor', 'cabor.id', '=', 'prestasi.cabor_id')
            ->join('event', 'event.id', '=', 'prestasi.event_id')
            ->join('nomor_pertandingan', 'nomor_pertandingan.id', '=', 'prestasi.nomor_pertandingan_id')
            ->join('fase_pertandingan', 'fase_pertandingan.id', '=', 'prestasi.fase_id')
            ->select(
                'event.nama as nama_evet',
                'event.jenis as jenis_evet',
                'event.lokasi as lokasi_evet',
                'event.foto as foto_evet',
                'nomor_pertandingan.nomor',
                'prestasi.medali',
                'nomor_pertandingan.gender',
                'fase_pertandingan.fase',
                'cabor.nama as cabor',
            )
            ->get();
        return response()->json(['data' => $prestasi]);
    }
}
