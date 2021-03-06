<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Arquiteta;
use App\Cliente;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $cliente = new Cliente;
        $listaClientes = $cliente->getListaCliente(4);

        $arquiteta = new Arquiteta;
        $listaArquiteta = $arquiteta->getListaArquitetas(4);
        return view('dashboard', compact('listaArquiteta', 'listaClientes'));
    }
}
