var $j = jQuery.noConflict();
$j(document).ready(function () {
    function loadAV(cep){
        
    }
    $j.ajax({
        url:"../getCep",
        dataType:"json",
        success:function(json){
            cep = json;
            loadAV(cep);
        }
    });
   


});