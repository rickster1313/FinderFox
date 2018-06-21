var $j = jQuery.noConflict();
$j(document).ready(function(){

    $j("#nome_av").bind("keyup", function(){

    });
    $j("#edit_url").bind("change",function(){
        if ($j("#edit_url").prop("checked")){
            $j("#url_av").removeAttr("disabled");
        }else{
             $j("#url_av").attr("disabled", "disabled");
        }
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