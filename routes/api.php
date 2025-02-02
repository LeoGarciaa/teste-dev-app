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

Route::get('cidades/{cidade}/medicos', [CidadeController::class, 'medicos']);
Route::apiResource('medicos', MedicoController::class);
Route::apiResource('cidades', CidadeController::class);


