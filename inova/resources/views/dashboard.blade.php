@extends('layout.padrao')
 
    
@section('titulo', 'Arquiteta')

@section('conteudo')


        <div class="col s12 m6">
          <div class="card #006064 cyan darken-4">
            <div class="card-content">
                <span class="card-title">Arquiteta</span>
    <table class="striped responsive-table">
            <thead>
              <tr>
                  <th>CAU</th>
                  <th>Arquiteta</th>                  
                  <th>E-mail</th>
                  <th>Endereço</th>                  
              </tr>
            </thead>
    
            <tbody>
              @foreach ($listaArquiteta as $item)
                <tr>
                <td>{{$item->cau}}</td>
                <td>{{$item->nome}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->endereco}}</td>
                </tr>    
                
              @endforeach
            
            </tbody>
          </table></div>
          <div class="card-action">
          <a class="btn-floating pulse" href="arquiteta/criar"><i class="material-icons">add</i></a>
          </div>
        </div>
      </div>
    


 
        <div class="col s12 m6">
          <div class="card #006064 cyan darken-4">
            <div class="card-content">
                <span class="card-title">Clientes</span>
    <table class="striped responsive-table">
                <thead>
                  <tr>
                      <th>Cliente</th>
                      <th>Titulo</th>
                      <th>Cidade</th>
                      <th>Endereço</th>
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($listaClientes as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->nome}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->endereco}}</td>
                    </tr>                    
                  @endforeach
  
                </tbody>
              </table></div>
              <div class="card-action">
                  <a class="btn-floating pulse" href="cliente/criar"><i class="material-icons">add</i></a>
                
              </div>
            </div>
          </div>

          <div class="col s12 m6">
          <div class="card darken-1">
            <div class="card-content">
                <span class="card-title">Clientes com pendencias</span>
                <table class="striped responsive-table">
                        <thead>
                          <tr>
                              <th>Cliente</th>
                              <th>Titulo</th>
                              <th>Cidade</th>
                              <th>Data de entrega</th>
                          </tr>
                        </thead>
                
                        <tbody>
                          <tr>
                            <td>Maria de Lourdes</td>
                            <td>Quarto</td>
                            <td>Jussara</td>
                            <td>25/12/2018</td>
                          </tr>
                          <tr>
                            <td>Antonio</td>
                            <td>Loja Frutas</td>
                            <td>America</td>
                            <td>20/01/2019</td>
                          </tr>
                          <tr>
                            <td>João Silva</td>
                            <td>Galpão de cebola</td>
                            <td>Lapão</td>
                            <td>04/03/2018</td>
                          </tr>
                        </tbody>
                      </table></div>
                      <div class="card-action">
                        
                      </div>
                    </div>
                  </div>
                 
@endsection