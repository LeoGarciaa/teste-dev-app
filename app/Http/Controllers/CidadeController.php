<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    //
    public function __construct(private Cidade $cidade)
    {

    }

    public function index(string $nome = null)
    {
        return $this->cidade->orderBy('nome')->get();
    }

    public function show(string $nome = null)
    {
         return Cidade::where('nome','LIKE', '%'.$nome.'%')->orderBy('nome')->get();
    }

    public function medicos(int $cidade_id)
    {
        $cidade = $this->cidade->where('id', $cidade_id)->with('medicos')->first();
        return $cidade->medicos;
    }
}
