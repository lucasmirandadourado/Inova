@extends('layout.padrao')
@section('titulo', 'Projeto')
@section('conteudo')

<div class="content-wrapper">

    <section class="content">
<div class="row">    
        <div class="row">
            <div class="row">
                <section class="content">    
                
                    <div class="box">
                    
                        <div class="box-header with-border">
                            <h3 class="box-title">Lista de projetos</h3>
                            <div class="box-tools pull-right">
                                    <a class="btn btn-primary btn-inv-criar">Criar Projeto</a>
                            </div>
                        </div>
                        
                        <div class="box-body">   
                            <table id="inv_tbl_projetos" class="table table-striped table-bordered" style="width:100%">
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
        </div>
</div>
    </section>

</div>
      
@endsection
@push('scripts')
    <script src="js/projeto.js"></script>
@endpush 