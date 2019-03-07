<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Arquiteta;
use App\Cliente;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function index() { 
        return view('dashboard');
    }
    
    public function login() {
        return view('login');
    }

    public function verificarLogin(Request $request){
        $nome = $request->get('nome');
        $senha = $request->get('senha');

        if(validadarCampos() == false){
            return response()->json('Preencha os campos.');
        }

    }

    function validarCampos($nome, $senha) {
        if(isset($nome) and !empty($nome) and isset($senha) and !empty($senha) ) {
            return true;
        } else {
            return false;
        }
    }
}
