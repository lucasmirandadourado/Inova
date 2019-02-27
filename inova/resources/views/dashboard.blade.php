@extends('layout.padrao')
 
    
@section('titulo', 'Dashboard')

@section('conteudo')

<div class="content-wrapper">
<section class="content">
  
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>150</h3>

        <p>Clientes</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>

        <p>Projetos abertos</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>44</h3>

        <p>Projetos totais</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>70</h3>

        <p>Orçamento</p>
      </div>
      <div class="icon">
        <i class="fa fa-bank"></i>
      </div>
      
    </div>
  </div>
  <!-- ./col -->
</div>
  
<div class="row">
    
  <section class="content">    
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Lista de projetos</h3>
        <div class="box-tools pull-right"></div>
      </div>
      <div class="box-body">   
        <table id="inv_tabela" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Data do projeto</th>
                  <th>Data da Obra</th>
                  <th>Estimativa de entrega</th>
                  <th>Cidade</th>
                  <th>Contato</th>
              </tr>
          </thead>
          <tbody>
              <div id="dashboard_projetos"></div>
          </tbody>
          <tfoot>
              <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Data do projeto</th>
                  <th>Data da Obra</th>
                  <th>Estimativa de entrega</th>
                  <th>Cidade</th>
                  <th>Contato</th>
              </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </section>
  
</div>

</section>

</div>

                 
@endsection