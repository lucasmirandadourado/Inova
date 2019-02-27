$.ajaxSetup({
    headers: { 'X-CSRF-Token': $('meta[name=_token]').attr('content') }
});

$(document).ready(function () {
    $('#inv_tabela').DataTable();
    tabelaProjetos();
});

function tabelaProjetos() {

    $.ajax({
        method: "POST",
        url: "/ajaxProject",
        date: 'buscarProjeto',
        dataType: "json",
        success: function (result) {
            console.log(result)
        },
        beforeSend: function () {

        },
        error: function (result) {
            console.log("Erro" + result)
        }
    });

    $('#dashboard_projetos').html();
}
