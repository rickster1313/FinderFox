var $j = jQuery.noConflict();
$j(document).ready(function () {
    $j("#enviar_msg").bind("click", function (e) {
        e.preventDefault();
        var mensagem = $j("#msg").val();
        if (mensagem.length > 0) {
            
            var destinatario = $j("#user_av").val();
            var remetente = $j("#user_logado").val();
            $j.ajax({
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