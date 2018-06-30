var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j('#myInput').bind('click', function(){
			$j('#home_p').trigger('click');
		});
		$j('#filtro').bind('click', function(){
			$j('#home_p').trigger('click');
		});
		//$j('#resultado_av').DataTable();
		function mostraAV(valor){

		}

		function pesquisaAV(){ 
			var dados = $j("#myInput").serialize();
			$j.ajax({
			    type:'GET',
			    url:"home/pesquisaAVs",
			    data:dados,
			    dataType:'json',
			    success:function(json){
			        if(json.length > 0){
			        	$j("#resultado_av").html("");

			        	json.forEach(mostraAV);

			        }else{
			        	$j("#resultado_av").html("NENHUM AV ENCONTRADO");
			        }
			        
			    },
			    error:function(){
			    	console.log("error no ajax");
			    }

			});

		}
		pesquisaAV();

		$j("#myInput").bind("keyup", function(){
			pesquisaAV();
		});
	});