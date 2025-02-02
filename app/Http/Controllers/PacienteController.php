<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;

class PacienteController extends Controller
{
    public function index()
    {
        return Paciente::all();
    }

    public function store(StorePacienteRequest $request)
    {
        $paciente = Paciente::create($request->all());

        return response()->json($paciente, 201);
    }

    public function show(Paciente $paciente)
    {
        return $paciente;
    }

    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());

        return response()->json($paciente, 200);
    }
}
