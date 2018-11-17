<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arquiteta;

class ArquitetaController extends Controller
{
    public function index() {
        $arquiteta = new Arquiteta;
        $arq = $arquiteta->getArquiteta();
        $listaArquiteta = $arquiteta->getListaArquitetas();
        return view('arquiteta.index', compact('arq', 'listaArquiteta'));
    }
}
