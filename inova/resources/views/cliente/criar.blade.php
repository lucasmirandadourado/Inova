@extends('layout.padrao')
@section('titulo', 'Novo Cliente')
@section('conteudo')

<div class="content-wrapper">
<section class="content">
    
<div class="row">
    <section class="content">    
            
        <form id="inv_form_cad_cliente" method="post">
            @csrf
            
            <div class="form-group">
                <label for="inv_nome">Nome</label>
                <input type="text" class="form-control" id="inv_nome" placeholder="Nome do cliente">
            </div>
            <div class="form-group">
                <label for="inv_email">E-mail</label>
                <input type="email" class="form-control" id="inv_email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="inv_contato">Contato</label>
                <input type="tel"  class="form-control" id="inv_contato" placeholder="Contato">
            </div>
            <div class="form-group">
                <label for="inv_endereco">Endereço</label>
                <input type="text" class="form-control" id="inv_endereco" placeholder="Endereço">
            </div>
            <button class="btn btn-primary" id="inv_salvar_cliente">Salvar</button>
        </form>
                                    
    </section>    
</div>
                
</section>

</div>              

@endsection

@push('scripts')
    <script src="{{ url('js/cliente_criar.js') }}"></script>
@endpush 