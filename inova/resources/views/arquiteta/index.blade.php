@extends('layout.padrao')
 
    
@section('titulo', 'Arquiteta')

@section('conteudo')


        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Clientes</span>
    <table class="striped responsive-table">
            <thead>
              <tr>
                  <th>Prefeitura</th>
                  <th>Titulo</th>
                  <th>Data de entrega</th>
              </tr>
            </thead>
    
            <tbody>
              <tr>
                <td>Irecê</td>
                <td>Praça do Feijão</td>
                <td>25/01/2019</td>
              </tr>
              <tr>
                <td>Lapão</td>
                <td>PSF Joãozinho</td>
                <td>30/03/2019</td>
              </tr>
              <tr>
                <td>João Dourado</td>
                <td>Praça Mata do Milho</td>
                <td>04/03/2018</td>
              </tr>
            </tbody>
          </table></div>
          <div class="card-action">
            <a href="#">Ver mais</a>
          </div>
        </div>
      </div>
    


 
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Clientes</span>
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
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>

          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
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
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>
                 
@endsection