var $j = jQuery.noConflict();
	$j(document).ready(function(){
		$j('#myInput').bind('click', function(){
			$j('#home_p').trigger('click');
		});

		function mostraAV(valor){
			if(nums == 1){
				$j("#resultado_av").append("<div id = 'linha_av"+collum+"' class='row justify-content-center justify-content-around align-content-around' style='padding-top:30px'> <div class='col-md-3 bg-light' style='height: 130px'><div class='logo' style='height: 130px; width:30%; background-color: #666'><img src = ' assets/images/AV/"+valor.logo_av+"'></div>"+valor.nome_av+"</div>");
			}else if(nums<3){
				$j("#resultado_av #linha_av"+collum).append("<div class='col-md-3 bg-light' style='height: 130px'><div class='logo' style='height: 130px; width:30%; background-color: #666'><img src = 'assets/images/AV/"+valor.logo_av+"'></div>"+valor.nome_av+"</div>");
				
			}else{
				$j("#resultado_av #linha_av"+collum).append("<div class='col-md-3 bg-light' style='height: 130px'><div class='logo' style='height: 130px; width:30%; background-color: #666'><img src = ' assets/images/AV/"+valor.logo_av+"'></div>"+valor.nome_av+"</div>");
				nums = 0;
				collum++;
			}
			nums++;
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
			        	nums = 1;
			        	collum = 1;
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