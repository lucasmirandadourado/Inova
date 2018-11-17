@extends('layout.padrao')
 
    
@section('titulo', 'Cliente')

@section('conteudo')
  
<div class="row">
<h3>Cadastro cliente</h3>

</div>

    <form class="col s12" method="POST" action="{{ route('cliente.store') }}">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nome" id="Nome" type="text" class="validate">
          <label for="Nome">Nome</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="endereco" type="text" class="validate">
          <label for="endereco">Endereço</label>
        </div>
      </div>
      
      <div class="row">
        <div class="col s12">
            <a class="waves-effect waves-light btn">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </form>
  
        


@endsection