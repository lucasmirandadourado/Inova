<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Arquiteta;
use App\Cliente;

class ArquitetaController extends Controller
{
    public function index() {     
        return view('arquiteta.index');
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

    public function ajaxArquiteta() {        
        $arquitetas = Arquiteta::all();    
        return response()->json($arquitetas);
    }
}
