
function carregarLinha(result){
    var tabela = $('#inv_tbl_projetos').DataTable()
    
    if(Array.isArray(result)) {        
        $(result).each(function (index, item) { 
            
        tabela.row.add([item.id, item.nome, item.descricao, formatarDate(item.created_at), 
            formatarDate(item.data_inicio_obra), item.cidade, formatarTeleforne(item.contato)]).draw().node();
        });
    }
}
function tabelaProjeto() {
    $.ajax({
        method: 'get',
        url: "/projeto/ajaxProjeto",
        dataType: 'json',
        success: carregarLinha,
        beforeSend: function () {
           
        },
        error: function (result) {
            console.log("Erro" + result)
        }
    });

    
}

$(document).ready(function () {
    $('#inv_tbl_projetos').DataTable();
    tabelaProjeto();
});