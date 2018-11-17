@extends('layout.padrao')
 
    
@section('titulo', 'Cliente')

@section('conteudo')




<table class="striped responsive-table">
        <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Endereço</th>
          </tr>
        </thead>

        <tbody>
                @foreach ($clientes as $cliente)
          <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->endereco}}</td>
          </tr>
          
          @endforeach

        </tbody>
      </table>


@endsection