@extends('layout.padrao')    
@section('titulo', 'Arquiteta')
@section('conteudo')

<div class="content-wrapper">
<section class="content">

    <div class="row">    
        <div class="row">
            <div class="row">
                <section class="content">    
                
                    <div class="box">
                    
                        <div class="box-header with-border">
                            <h3 class="box-title">Lista de Arquitetas</h3>
                            <div class="box-tools pull-right">
                                    <a class="btn btn-primary btn-inv-criar">Criar Arquiteta</a>
                            </div>
                        </div>
                        
                        <div class="box-body">   
                                {{ csrf_field() }}
                            <table id="inv_tbl_arq" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>CAU</th>
                                        <th>E-mail</th>
                                        <th>Contato</th>
                                        <th>Endereço</th>
                                        
                                    </tr>
                                </thead>
                          
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>CAU</th>
                                        <th>E-mail</th>
                                        <th>Contato</th>
                                        <th>Endereço</th>
                                        
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
    <script src="js/arquiteta.js"></script>
@endpush 