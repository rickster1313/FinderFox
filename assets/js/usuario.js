var $j = jQuery.noConflict();
$j(document).ready(function () {
  
    function pararClock() {
        if (typeof msgs != "undefined") {
            clearInterval(msgs);
        }

    }
    function ligarClock() {

        $j('#mensagens').load('html/abrir/mensagens/' + idm);
        $j.ajax({
            url: "usuario/visualizou",
            type: "POST",
            data: {user: idm}
        });
    }
    $j(".pessoa ").bind("click", function () {
        pararClock();
        idm = $j(this).find('input').val();
        ligarClock();

        msgs = setInterval(ligarClock, 3000);
        $j(".type_msg").show();
        $j("#caixa_msg").val("");
        
        $j.ajax({
            url: "usuario/visualizou",
            type: "POST",
            data: {user: idm}
        });
    });

    $j("#enviarMsg").bind('click', function (e) {
        e.preventDefault();
        var msgChat = $j("#caixa_msg").val();
        var teste = msgChat.replace(/ /g, '');
        if(teste.length > 0){
        $j.ajax({
            url: 'usuario/setMsg',
            type: 'POST',
            data: {msgChat: msgChat, destinatario: idm},
            success: function () {
                $j("#caixa_msg").val("");
            }
        });
    }
    });

    $j("#myInput").on("keyup", function () {
        var value = $j(this).val().toLowerCase();
        $j(".pessoa").filter(function () {
            $j(this).toggle($j(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    function verificaLida() {
        contacts = new Array();
        for (i = 0; i < $j(".cont").length; i++) {
            var aux = $j(".cont")[i]['value'];
            contacts.push(aux);
        }
        $j.ajax({
            url: 'usuario/getInfo',
            type: 'POST',
            data: {contacts: contacts},
            dataType: 'json',
            success: function (json) {
                for (i = 0; i < $j(".cont").length; i++) {
                    $j(".cont[value="+$j(".cont")[i]['value']+"]").parent().parent().find(".noti").html(json[i]== 0? "" :json[i]);
                }


            }
        });

    }
    function start() {
        init = setInterval(verificaLida, 3000);
    }

   
        start();
        verificaLida();
    
});
