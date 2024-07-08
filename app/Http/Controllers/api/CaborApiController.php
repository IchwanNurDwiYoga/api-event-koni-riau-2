<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Atlet;
use App\Models\Cabor;
use App\Models\CaborPesertaEvent;
use App\Models\PesertaEvent;
use Illuminate\Http\Request;

class CaborApiController extends Controller
{
    public function index()
    {
        $cabor = CaborPesertaEvent::where('event_id', 62)
            ->join('cabor', 'cabor.id', '=', 'cabor_peserta_event.cabor_id')
            ->select('cabor.nama', 'cabor.id as cabor_id', 'cabor_peserta_event.*', 'cabor.foto')
            ->orderBy('cabor.nama')->get();
        return response()->json(['data' => $cabor]);
    }

    public function caborDetail($id)
    {
        $cabor = CaborPesertaEvent::where('cabor_id', $id)->where('event_id', 62)->first();
        $atlets = PesertaEvent::where('event_id', 62)
            ->where('cabor_id', $id)
            ->join('atlet', 'atlet.id', '=', 'peserta_event.atlet_id')
            ->join('profil', 'profil.id', '=', 'atlet.profil_id')
            ->join('cabor', 'cabor.id', '=', 'atlet.cabor_id')
            ->select('peserta_event.event_id', 'cabor.id as cabor_id', 'atlet.id as atlet_id', 'profil.nama as nama_atlet', 'profil.foto',)
            ->get();

        return response()->json(['data' => $atlets]);
    }
}
