function buscarArquiteta(){
    $.ajax({
        method:"GET",
        url: '/arquiteta/ajaxArquiteta',
        dataType: 'json',
        success: function(result){
            $('#inv_arq').append('<option></option>');
            $(result).each(function(index, item){
                $('#inv_arq').append(`<option value='${item}'>${item.nome}</option>`);
            });
        }
    });
}

function buscarClientes() {  
    $.ajax({
        method:"GET",
        url: '/cliente/ajaxCliente',
        dataType: 'json',
        success: function(result){
            $('#inv_cli').append('<option></option>');
            $(result).each(function(index, item){
                $('#inv_cli').append(`<option value='${item}'>${item.nome}</option>`);
            });
        }
    });
}

function iniciarPagina() {  
    buscarArquiteta();
    buscarClientes();
}

$(document).ready(function () {
    iniciarPagina();
});