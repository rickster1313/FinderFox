var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j("#cep_busca").mask("00000-000");
		$j("#form_buscar_cep").bind("submit", function(e){
			e.preventDefault();
			var cep = $j("#cep_busca").val();
			if(cep.length == 9){
				window.location.href = "buscaAV/get/"+cep;
			}else{
				$j("#cep_busca").focus();
			}
		});

	});