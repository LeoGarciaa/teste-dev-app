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

    public function show(string $nome)
    {
        $nome = ltrim(str_replace(['DRA','DR'],'',  strtoupper($nome)));
        $medico = Medico::where('nome','LIKE', '%'.$nome.'%')->orderBy('nome')->get();
        return $medico;
    }

    public function store(StoreMedicoRequest $request)
    {
        $medico = Medico::create($request->all());
        return response()->json($medico, 201);
    }
}
