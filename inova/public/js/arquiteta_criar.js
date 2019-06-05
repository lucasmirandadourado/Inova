
$("#inv_form_cad_arq").submit(function(e) {
    e.preventDefault(); 
    var form = $(this).serialize();
    console.log(form);

    $.ajax({
        method: "POST",
        url: '/arquiteta/store',
        data: form,
        dataType: 'json',
        success: function (resul) {  
            $('#inv-msg-alert').removeClass( "hide" );    
            $('#inv-msg').html('<span class="glyphicon glyphicon-user"></span> Cadastro realizado com sucesso.');
            $('#inv-msg-alert').fadeOut(5000).delay(5000);
            $('form')[0].reset();
        }, error: function (resul) {  
            console.log(resul);
        }
    });
});

$(document).ready(function(){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

$(document).on('change', '#inv_senha, #inv_senha_confirmar', function(){
    let senha = $('#inv_senha').val();
    let confirmarSenha = $('#inv_senha_confirmar').val();

    if(verifcarSenha(senha, confirmarSenha)) {
        setTimeout(function() {
            $('#inv_senha').css({'border-block-end-color': '#3c8dbc', 'border-block-end-width': '2px'});
            $('#inv_senha_confirmar').css({'border-block-end-color': '#3c8dbc', 'border-block-end-width': '2px'});
        }, 4000);
        
    } else {
        $('#inv_senha').css({'border-block-end-color': 'red', 'border-block-end-width': '2px'});
        $('#inv_senha_confirmar').css({'border-block-end-color': 'red', 'border-block-end-width': '2px'});
    }
});