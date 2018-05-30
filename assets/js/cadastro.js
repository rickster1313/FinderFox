var $j = jQuery.noConflict();
		$j(document).ready(function(){

			//mascaras de inputs
			$j("#cpf").mask("000.000.000-00");
			$j("#telefone").mask("(00) 00000-0000");
			$j("#cnpj").mask("00.000.000/0000-00");

			//muda form par fisica ou juridica
			var pessoa = "fisica";
			$j("input:radio[name=pessoa_txt]").bind("change", function(){
				if ($j("input[name='pessoa_txt']:checked").val() == 'fisica') {
                	pessoa = "fisica";
            	}
            	if ($j("input[name='pessoa_txt']:checked").val() == 'juridica') {
                	pessoa = "juridica";
            	}
            	if(pessoa == "fisica"){
            		$j("#div_cpf").css("display", "block");
            		$j("#div_cnpj").css("display", "none");
            		$j("#cpf").val("");
            	}else{
            		$j("#div_cpf").css("display", "none");
            		$j("#div_cnpj").css("display", "block");
            		$j("#cnpj").val("");
            	}
			});
			
			//força de senha
			$j("#senha").bind("keyup",function(){
			var forca= 0;
			var senha = $j(this).val();
				if(senha.length >7){
					forca += 40;
				}
				 var reg = new RegExp(/[a-z]/);
				 if(reg.test(senha)){
				 	forca += 20;
				 }

				 var reg = new RegExp(/[A-Z]/);
				 if(reg.test(senha)){
				 	forca += 20;
				 }

				 var reg = new RegExp(/[0-9]/);
				 if(reg.test(senha)){
				 	forca += 20;
				 }
				 
				if(forca>=0 && forca <25){
					$j("#forca").html("<strong>Senha Inválida</strong>");
					$j("#forca").css("color", "gray");
				}
				if(forca>=25 && forca <50){
					$j("#forca").html("<strong>Fraca</strong>");
					$j("#forca").css("color", "red");
				}else if(forca>=50 && forca <75){
					$j("#forca").html("<strong>Média</strong>");
					$j("#forca").css("color", "orange");
				}else if(forca>=75 && forca < 100){
					$j("#forca").html("<strong>Forte</strong>");
					$j("#forca").css("color", "green");
				}else if(forca==100){
					$j("#forca").html("<strong>Muito Forte</strong>");
					$j("#forca").css("color", "darkgreen");
				}
				globalForca = forca;
			});


			//ajax verificando se email existe
			var email = "";
			$j("#email").bind("keyup", function(){
			email = $j(this).val();
			if(email != ""){
			    var filtro = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}$/;
			    if(filtro.exec(email)) {
			    	email = $j(this).serialize();
			        $j.ajax({
			        	type:'GET',
			        	url:"cadastro/verificaEmail",
			        	data:email,
			        	dataType:'json',
			        	success:function(json){
			        		$j("#resp_email").html(json.texto);
			        		if(json.status == true){
			        			$j("#resp_email").css("color", "green");
			        		}else{  
			        			$j("#resp_email").css("color", "red");
			        		}
			        	},
			        	error:function(){
			        		console.log("error no ajax");
			        	}

			        	});


			    }else{
			        $j("#resp_email").html("E-mail inválido");  
			        $j("#resp_email").css("color", "red"); 
			    }
			}else{
			    $j("#resp_email").html("Digite um e-mail");
			    $j("#resp_email").css("color", "black");
			}

			});
			
			//ajax verificando se cpf/cnpj existe

			var cpf_cnpj="";
			
				$j("#cpf").bind("keyup",function(){
					cpf_cnpj = $j(this).val();
					if(cpf_cnpj.length == 14){
						cpf_cnpj = $j(this).serialize();
			        	$j.ajax({
				        	type:'GET',
				        	url:'cadastro/verificaCPF_CNPJ',
				        	data:cpf_cnpj,
				        	dataType:'json',
				        	success:function(json){
				        		$j("#resp_pessoa").html(json.texto);
				        		if(json.status == true){
				        			$j("#resp_pessoa").css("color", "green");
				        		}else{  
				        			$j("#resp_pessoa").css("color", "red");
				        		}
				        	},
				        	error:function(){
				        		console.log("error no ajax");
				        	}
			        	});
					}else if(cpf_cnpj.length == 0){
						$j("#resp_pessoa").html("Digite um CPF");
						$j("#resp_pessoa").css("color", "black");
					}else{
						$j("#resp_pessoa").html("CPF inválido");
						$j("#resp_pessoa").css("color", "red");
					}
				});
			
				$j("#cnpj").bind("keyup",function(){
					cpf_cnpj = $j(this).val();
					if(cpf_cnpj.length == 18){
						cpf_cnpj = $j(this).serialize();
			        	$j.ajax({
				        	type:'GET',
				        	url:'cadastro/verificaCPF_CNPJ',
				        	data:cpf_cnpj,
				        	dataType:'json',
				        	success:function(json){
				        		$j("#resp_pessoa").html(json.texto);
				        		if(json.status == true){
				        			$j("#resp_pessoa").css("color", "green");
				        		}else{  
				        			$j("#resp_pessoa").css("color", "red");
				        		}
				        	},
				        	error:function(){
				        		console.log("error no ajax");
				        	}
			        	});
					}else if(cpf_cnpj.length == 0){
						 $j("#resp_pessoa").html("Digite um CNPJ");
						$j("#resp_pessoa").css("color", "black");
					}else{
						$j("#resp_pessoa").html("CNPJ inválido");
						$j("#resp_pessoa").css("color", "red");
					}
				});



		});
