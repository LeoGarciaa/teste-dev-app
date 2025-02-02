<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ConsultaController;

use Illuminate\Http\Request;



Route::get('/', function () {
    return response()->json([
        'sucess'=> true
    ]);
});

//Route::post('login', [AuthController::class, 'login']);

Route::get('cidades/{cidade}/medicos', [CidadeController::class, 'medicos']);
Route::apiResource('medicos', MedicoController::class);
Route::apiResource('cidades', CidadeController::class);


Route::group(['middleware' => 'auth:api'], function () {

    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);


    Route::apiResource('pacientes', PacienteController::class);
    Route::apiResource('consultas', ConsultaController::class);
    Route::get('medicos/{medico}/pacientes', [MedicoController::class, 'pacientes']);
});

Route::post('/login', function (Request $request){
    $credentials = $request->only(['email', 'password']);

    if (!$token = auth('api')->attempt($credentials)){
        abort(401, 'Unauthorized');
    }

    return response()->json([
        'data' => [
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]
        ]);
});
