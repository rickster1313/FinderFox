var $j = jQuery.noConflict();
$j(document).ready(function(){
    $j("#menu_av").bind("click", function(){
        var dados ="";
        $j.ajax({
            type: 'GET',
            url:"empresario/verificaAV",
            data:dados,
            dataType:'json',
            success:function(json){
                if (json.exists == "yes") {
                    //AQUI FICA OQ ACONTECE SE JA EXISTIR UM AV
                    $j("#av_conteudo").load(json.personalize);
                }else{
                    //AQUI FICA OQ ACONTECE SE NÃO EXISTIR UM AV
                    $j("#av_conteudo").load(json.create);
                }
            },
            error:function(){
                console.log("error no ajax");
            }
            

        });
    });
});