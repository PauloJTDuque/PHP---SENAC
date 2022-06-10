$(document).ready(function () {
   
    $("#form").submit(function () {

        var dados = jQuery(this).serialize();
        
        $.ajax({
            url: "enviar.php",
            cache: false,
            method: "GET",
            dataType: "html",
            data: dados,
            success: function (msg) {
                alert(`${msg}Parabéns, você receberá novidades sobre o curso`);
                $("#form #email").val("");
            }
            
        });
        
        return false;

    });
   
});