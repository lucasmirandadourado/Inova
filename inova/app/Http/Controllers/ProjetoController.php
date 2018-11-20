<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\Cliente;
use App\Arquiteta;

class ProjetoController extends Controller
{
    public function index()
    {
        $projeto = new Projeto;
        $listaProjeto = $projeto->getListaProjetos(10);
        return view("projeto.index", compact('listaProjeto'));
    }

    public function create()
    {
        $cliente = new Cliente;
        $clientes = $cliente->getListaClientes();

        $arquiteta = new Arquiteta;
        $arquitetas = $arquiteta->getListaAll();

        return view("projeto.criar", compact('clientes', 'arquitetas'));
    }

    public function store(Request $request)
    {
        $projeto = new Projeto([
            'nome' => $request->get('nome'),
            'email' => $request->get('email'),
            'endereco' => $request->get('endereco'),
            
        ]);
        $projeto->save();
        
        return redirect('projeto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
