//var $j = jQuery.noConflict();
$(document).ready(function () {
   
    $("#enviar_msg").bind("click", function (e) {
        e.preventDefault();
        var mensagem = $("#msg").val();
        if (mensagem.length > 0) {

            var destinatario = $("#user_av").val();
            var remetente = $("#user_logado").val();
            $.ajax({
                url: "av/enviarMsg",
                type: "POST",
                data: {msg: mensagem, dest: destinatario, remt: remetente},
                success: function () {
                    window.location.href = window.location.href;
                }
            });
        }

    });

});