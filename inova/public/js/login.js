function verificarLogin(form) {
    $.ajax({
        method: "POST",
        url: "/login/verificarLogin",
        data: form,
        dataType: "json",
        // beforeSend: esperar,
        success: function(result) {
            console.log(result); 
        }, 
        error: function(result) {                  
            $("#inv-msg").removeClass( "hide" );    
            $("#inv-msg").fadeOut(5000);
            console.log(result);            
        }
    });
}


$(document).ready(function() {
    $('#inv').submit(function(e) {
        e.preventDefault();
        var serializeDados = $('#inv').serialize();
        verificarLogin(serializeDados);
    });

});
