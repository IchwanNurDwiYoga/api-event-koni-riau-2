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
            ->join('cabor', 'cabor_peserta_event.id', '=', 'cabor.id')
            ->orderBy('nama')
            ->get();
        return response()->json(['data' => $cabor]);
    }

    public function caborDetail($id)
    {
        $cabor = CaborPesertaEvent::where('event_id', 62)->first();
        $atlets = Atlet::where('cabor_id', $id)->with('profil:id,nama', 'cabor:id,nama')->get();

        return response()->json(['data' => $atlets]);
    }
}
