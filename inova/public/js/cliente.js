function carregarLinha(result){
    var tabela = $('#inv_tbl_cli').DataTable()
  
    if(Array.isArray(result)) {        
        $(result).each(function (index, item) { 
        tabela.row.add([item.id, item.nome, item.email, 
            (!item.contato ? "" : formatarTeleforne(item.contato)), item.endereco]).draw().node();
        });
        
    }
}
function tabelaCliente() {
    $.ajax({
        method: 'get',
        url: "/cliente/ajaxCliente",
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
    $('#inv_tbl_cli').DataTable();
    tabelaCliente();
});