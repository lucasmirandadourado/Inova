<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Arquiteta;
use App\Cliente;

class ArquitetaController extends Controller
{
    public function index() {
        $cliente = new Cliente;
        $listaClientes = $cliente->getListaCliente(4);

        $arquiteta = new Arquiteta;
        $listaArquiteta = $arquiteta->getListaArquitetas(4);
        return view('arquiteta.index', compact('listaArquiteta', 'listaClientes'));
    }

    public function create()
    {
        return view("arquiteta.criar");
    }

    public function store(Request $request)
    {
        $arquiteta = new Arquiteta([
            'nome' => $request->get('nome'),
            'email' => $request->get('email'),
            'endereco' => $request->get('endereco'),
            'cau' => $request->get('cau'),
        ]);
        $arquiteta->save();
        
        return redirect('arquiteta');
    }
}
