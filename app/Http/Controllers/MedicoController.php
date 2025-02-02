<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMedicoRequest;
use App\Models\Medico;

class MedicoController extends Controller
{
    //
    public function __construct(private Medico $medico)
    {
        //$this->middleware('auth:sanctum')->except(['index', 'show']);
    }

    public function index()
    {
        return $this->medico->orderBy('nome')->get();
    }

    public function show(Medico $medico)
    {
        return $medico;
    }

    public function store(StoreMedicoRequest $request)
    {
        $medico = Medico::create($request->all());
        return response()->json($medico, 201);
    }

    public function pacientes(Medico $medico)
    {
        return response()->json($medico->pacientes, 200);
    }
}
