<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;

Route::get('/', function () {
    return response()->json([
        'sucess'=> true
    ]);
});

Route::post('login', [AuthController::class, 'login']);

Route::apiResource('cidades', CidadeController::class);
