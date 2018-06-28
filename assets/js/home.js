var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j('#myInput').bind('click', function(){
			$j('#home_p').trigger('click');
		});

		function pesquisaAV(){ 
			var dados = $j("#myInput").serialize();
			$j.ajax({
			    type:'GET',
			    url:"home/pesquisaAVs",
			    data:dados,
			    dataType:'json',
			    success:function(json){
			        console.log(json.status);
			        
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