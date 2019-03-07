@extends('layout.padrao')
@section('titulo', 'Cliente')
@section('conteudo')
<div class="content-wrapper">
    <section class="content">
    
        <div class="row">    
            <div class="row">
                <div class="row">
                    <section class="content">    
                        
                        <div class="box">
                        
                            <div class="box-header with-border">
                                <h3 class="box-title">Lista de Cliente</h3>
                                <div class="box-tools pull-right">
                                    <a class="btn btn-primary btn-inv-criar" href="{{ url('cliente/criar') }}"">Criar Cliente</a>
                                </div>
                            </div>
                            
                            <div class="box-body">   
                                    {{ csrf_field() }}
                                <table id="inv_tbl_cli" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Contato</th>
                                            <th>Endereço</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                    </tbody>
                                    
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
        <script src="js/cliente.js"></script>
    @endpush 