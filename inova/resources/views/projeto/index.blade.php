@extends('layout.padrao')
 
    
@section('titulo', 'Projeto')

@section('conteudo')

<div class="row">
    
        <div class="col s10"><h3>Projetos</h3></div>
    
    <div class="col s1 offset-s1 inv-btn-add">
        <a class="btn-floating btn-large #f44336 red inv-btn" href="projeto/criar"><i class="material-icons">add</i></a>
    </div>
  </div>


<table class="striped responsive-table">
        <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Descrição</th>
              <th>ID cliente</th>
              <th>ID arquiteta</th>
              <th>Area total</th>
              <th>tipo</th>
              <th></th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          @if(count($listaProjeto) == 0)
          <tr>
              <td>Não foi encontrado clientes.</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          @else
            @foreach ($listaProjeto as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->descricao }}</td>
                <td>{{ $item->arquiteta_id }}</td>
                <td>{{ $item->cliente_id }}</td>                
                <td>{{ $item->area_total }}</td>
                <td>{{ $item->tipo }}</td>
                <th><a class="btn-floating btn-large #00c853 green accent-4"><i class="material-icons">edit</i></a></th>
                <th><a class="btn-floating btn-large #f44336 red"><i class="material-icons">delete</i></a></th>
              </tr>
            @endforeach
          @endif
         
        </tbody>
        
       
      </table>

      <ul class="pagination">          
          <li class="waves-effect"> {{ $listaProjeto->links() }}	</li>          
      </ul>
@endsection