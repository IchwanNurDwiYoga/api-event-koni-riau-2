<?php

use App\Http\Controllers\api\AtletApiController;
use App\Http\Controllers\api\CaborApiController;
use App\Http\Controllers\api\PrestasiApiController;
use App\Http\Controllers\api\ProfilApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/profil', [ProfilApiController::class, 'index']);

Route::get('/cabor', [CaborApiController::class, 'index']);
Route::get('/cabor/{id}', [CaborApiController::class, 'caborDetail']);

Route::get('/atlet', [AtletApiController::class, 'index']);
Route::get('/atlet/{id}', [AtletApiController::class, 'atletDetail']);

Route::get('/prestasi/{id}', [PrestasiApiController::class, 'index']);
