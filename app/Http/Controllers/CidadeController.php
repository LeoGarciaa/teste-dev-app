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
    public function index()
    {
        return $this->cidade->all();
    }
}
