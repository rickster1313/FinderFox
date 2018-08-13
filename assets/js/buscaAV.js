var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j("#cancela_cep").bind("click", function(){
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