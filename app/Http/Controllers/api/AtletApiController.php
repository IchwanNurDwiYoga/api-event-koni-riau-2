<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Atlet;
use Illuminate\Http\Request;

class AtletApiController extends Controller
{
    public function index()
    {
        $atlet = Atlet::with('profil:id,nama,foto', 'cabor:id,nama,foto')->get();

        return response()->json(['data' => $atlet]);
    }

    public function atletDetail($id)
    {
        $atlet = Atlet::where('id', $id)->with('profil', 'cabor:id,nama,foto')->first();

        return response()->json(['data' => $atlet]);
    }
}
