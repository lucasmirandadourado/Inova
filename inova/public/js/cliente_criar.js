
$("#inv_form_cad_cliente").submit(function(e) {
    e.preventDefault(); 
    var form = $(this);
    $.ajax({
           type: "POST",
           url: '/cliente/store',
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
                $('#inv-msg-alert').removeClass( "hide" );    
                $('#inv-msg').html('<span class="glyphicon glyphicon-user"></span> Cadastro realizado com sucesso.');
                $('#inv-msg-alert').fadeOut(5000).delay(5000);
                $('form')[0].reset();
           },
           error: function(data) {
                console.log(data);
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