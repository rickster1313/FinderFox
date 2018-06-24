var $j = jQuery.noConflict();
$j(document).ready(function(){
    nome_av_stats = false;
    $j("#edit_url").bind("change",function(){
        if ($j("#edit_url").prop("checked")){
            $j("#url_av").removeAttr("disabled");
        }else{
             $j("#url_av").attr("disabled", "disabled");
        }
    });

    $j("#nome_av").bind("keyup", function(){
        var dados = $j(this).serialize();
        $j.ajax({
            type:'POST',
            url:'empresario/verificaNomeAV',
            data:dados,
            dataType:'json',
            success:function(json){
                if (json.status == 'yes') {
                    nome_av_stats = false;
                    $j('#nome_av').css('background-color', 'red');
                }else{
                    nome_av_stats = true;
                    $j('#nome_av').css('background-color', 'green');
                }
            },
            error:function(){
                console.log("error no ajax");
            }
        });
        var nomeAv = $j(this).val();
        nomeAv = nomeAv.replace(' ', '-');

        $j('#url_av').val(nomeAv);
    });

    /*$j("#form_newAV").bind("submit",function(e){
        e.preventDefault();
        var form = $j(this);
        var data = new FormData(form);
        $j.ajax({
            type:POST,
            url:,
            data:,
            contentType:false,
            processData:false,  
            success:function(){

            }
        });
    });*/
});