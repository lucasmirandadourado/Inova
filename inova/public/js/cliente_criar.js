
// $( "#inv_salvar_cliente" ).click(function() {
//     $('#inv_form_cad_cliente')
//     var form = $("form").val();
//     console.log(form);
// });


$("#inv_form_cad_cliente").submit(function(e) {

    e.preventDefault(); 

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
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