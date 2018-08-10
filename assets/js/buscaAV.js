var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j("#cancela_cep").bind("click", function(){
			$j.ajax({
			        type:'POST',
			        url:"buscaAV/deleteCep",
			        async: false,
			        success:function(){
			        	window.location.href = "index";
			        },
			        error:function(){
			        	console.log("error no ajax");
			        }
			    });
		});


	});