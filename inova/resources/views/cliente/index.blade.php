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
          @if(count($listaClientes) == 0)
          <tr>
              <td>Não foi encontrado clientes.</td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          @else
            @foreach ($listaClientes as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nome}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->endereco}}</td>
              </tr>
            @endforeach
          @endif
         
        </tbody>
        
       
      </table>

      <ul class="pagination">          
          <li class="waves-effect"> {{ $listaClientes->links() }}	</li>          
      </ul>
@endsection