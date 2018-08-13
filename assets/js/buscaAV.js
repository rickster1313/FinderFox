var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j("#cancela_cep").bind("click", function(){
			var url_atual = window.location.href;
			//alert(url_atual);
			$j.ajax({
			        type:'GET',
			        url:'buscaAV/deleteCep',
			        success:function(){
			        	window.location.href= 'home';
			        },
			        error:function(){
			        	console.log("error no ajax");
			        }
			    });
		});


	});