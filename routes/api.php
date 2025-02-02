<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;


Route::get('/', function () {
    return response()->json([
        'sucess'=> true
    ]);
});

Route::post('login', [AuthController::class, 'login']);

Route::apiResource('cidades/{nome?}', CidadeController::class);
Route::apiResource('medicos/{nome?}', MedicoController::class);
