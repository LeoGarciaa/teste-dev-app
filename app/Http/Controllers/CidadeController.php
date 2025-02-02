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

        if (is_null($nome)) {
            return $this->cidade->orderBy('nome')->get();
        }

         return Cidade::where('nome','LIKE', '%'.$nome.'%')->orderBy('nome')->get();
    }
}
