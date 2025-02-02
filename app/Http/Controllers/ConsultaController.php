<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function __construct(private Consulta $consulta)
    {

    }
    public function index()
    {
        return Consulta::all();
    }

    public function store(StoreConsultaRequest $request)
    {
        $consulta = Consulta::create($request->all());

        return response()->json($consulta, 201);
    }

    public function show(Consulta $consulta)
    {
        return $consulta;
    }
}
