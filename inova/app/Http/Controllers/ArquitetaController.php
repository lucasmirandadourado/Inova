<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arquiteta;


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
        
        $arquiteta = new Arquiteta($request->all());
        $arquiteta->save();                
        return redirect('arquiteta');
    }

    public function ajaxArquiteta() {        
        $arquitetas = Arquiteta::all();    
        return response()->json($arquitetas);
    }
}
