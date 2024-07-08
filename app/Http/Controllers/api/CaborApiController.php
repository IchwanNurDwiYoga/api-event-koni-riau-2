<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Atlet;
use App\Models\Cabor;
use App\Models\CaborPesertaEvent;
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
        $cabor = CaborPesertaEvent::where('event_id', 62)->first();
        $atlets = Atlet::where('cabor_id', $id)->with('profil:id,nama,foto', 'cabor:id,nama')->get();

        return response()->json(['data' => $atlets]);
    }
}
