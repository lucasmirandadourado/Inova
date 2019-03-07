@extends('layout.padrao')
@section('titulo', 'Projeto')
@section('conteudo')

  <div class="content-wrapper">
    <section class="content">
      <div class="row">    
        <div class="row">
          <div class="row">
              <section class="content">    
                <h3>Criar novo projeto</h3>
                <form method="post">
                    {!! csrf_field() !!}
                    <div class="alert alert-success hide" id="inv-msg-alert" role="alert">
                            <p id="inv-msg"></p>
                    </div>
                                        
                    <div class="form-group">
                        <label for="inv_nome">Nome projeto</label>
                        <input type="text" name="nome" class="form-control" id="inv_nome" placeholder="Nome do projeto">
                    </div>
                    <div class="form-group">
                        <label for="inv_descricao">Descrição</label>
                        <textarea name="descricao" id="inv_descricao" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-6" id="inv_select">
                        <label for="inv_arq">Arquiteta</label>
                        <select class="form-control" name="arquiteta" id="inv_arq"></select>
                    </div>
                    <div class="form-group col-md-6" id="inv_select">
                        <label for="inv_cliente">Cliente</label>
                        <select class="form-control" name="cliente" id="inv_cli"></select>
                    </div>
                    <div class="form-group col-md-6" id="inv_select">
                        <label for="inv_area_const">Área de contrução</label>
                        <input class="form-control" type="number" name="area_constucao" id="inv_area_const"/>
                    </div>
                    <div class="form-group col-md-6" id="inv_select">
                        <label for="inv_tipo">Tipo</label>
                        <input type="text" class="form-control col-4" name="tipo" id="inv_tipo"/>
                    </div>

                    <div class="form-group col-md-12" id="inv_salvar">
                      <button class="btn btn-primary" id="inv_salvar_proj">Salvar</button>
                    </div>
                </form>
              </section>    
          </div>
        </div>
      </div>
    </section>
  </div>
      
@endsection

@push('scripts')
    <script src="/js/projeto_criar.js"></script>
@endpush 