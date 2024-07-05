<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilApiController extends Controller
{
    public function index()
    {
        $profil = Profil::all();
        return response()->json($profil);
    }
}
