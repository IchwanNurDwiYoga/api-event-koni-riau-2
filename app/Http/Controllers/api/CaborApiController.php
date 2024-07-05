<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Atlet;
use App\Models\Cabor;
use Illuminate\Http\Request;

class CaborApiController extends Controller
{
    public function index()
    {
        $cabor = Cabor::orderBy('nama', 'asc')->get();
        return response()->json($cabor);
    }

    public function caborDetail($id)
    {
        $cabor = Cabor::where('id', $id)->first();
        $atlets = Atlet::where('cabor_id', $cabor->id)->with('profil:id,nama')->get();

        return response()->json($atlets);
    }
}
