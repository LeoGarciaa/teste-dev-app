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
    public function index(string $nome = null)
    {
        if (is_null($nome)) {
            return $this->medico->orderBy('nome')->get();
        }

        $nome = ltrim(str_replace(['DRA','DR'],'',  strtoupper($nome)));
        
        return Medico::where('nome','LIKE', '%'.$nome.'%')->orderBy('nome')->get();
    }

    public function store(StoreMedicoRequest $request)
    {
        $medico = Medico::create($request->all());

        return response()->json($medico, 201);
    }
}
