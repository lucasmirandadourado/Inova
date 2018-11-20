@extends('layout.padrao')
 
    
@section('titulo', 'Cliente')

@section('conteudo')
  
<div class="row">
<h3>Novo Projeto</h3>

</div>

    <form class="col s12" method="POST" action="/cliente/criar">
        @csrf
      
      <div class="row">
        <label>Cliente</label>
        <select class="browser-default">
          <option value="" disabled selected>Escolha o cliente</option>
          @foreach ($clientes as $item)
            <option value="{{$item->id}}">{{$item->nome}}</option>
          @endforeach
        </select>
      </div>
      
      <div class="row">
          <label>Arquiteta</label>
          <select class="browser-default">
            <option value="" disabled selected>Escolha a arquiteta responsável</option>
            @foreach ($arquitetas as $item)
              <option value="{{$item->id}}">{{$item->nome}}</option>
            @endforeach
          </select>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nome" id="nome" type="text" class="validate" name="nome">
          <label for="nome">Nome</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email">
            <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="endereco" type="text" class="validate" name="endereco">
          <label for="endereco">Endereço</label>
        </div>
      </div>
      
      <div class="row">
        <div class="col s12">
            <a class="waves-effect waves-light btn" href="/">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </form>
  
        


@endsection