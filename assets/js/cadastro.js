var $j = jQuery.noConflict();
		$j(document).ready(function(){
			$j(".qua-es").bind("click",function(){
				$j("body").css("background-color", "rgba(54,24,80,1)");
				$j(".main").fadeOut(400, function() {
    				$j(".formularioUser").show();
  				});
  			});

			$j(".qua-di").bind("click",function(){
				$j("body").css("background-color", "rgba(35,35,35,1)");
				$j(".main").fadeOut(400, function() {
    				$j(".formularioEmpre").show();
  				});
			});



		});


			/*
			function abrir(){
  				if(aberto == 1) {
					aberto =2;
					document.getElementById("main").style.marginLeft = "19%";
  			  		document.getElementById("mySidebar").style.width = "19%";
  			  		document.getElementById("mySidebar").style.display = "block";
				} else {
					aberto=1;
					document.getElementById("main").style.marginLeft = "0%";
  					document.getElementById("mySidebar").style.display = "none";
  					document.getElementById("openNav").style.display = "inline-block";
				}
  			}
			aberto = 1;
			$j("#openNav").bind("click", function(){
				abrir(); 
  			}); 
  			abrir();
			email_stats = false;
			senha_stats = false;
			telefone_stats = false;
			cpf_cnpj_stats = false;

			//mascaras de inputs
			$j("#cpf_cnpj").mask("000.000.000-00");
			$j("#telefone").mask("(00) 00000-0000");

			//muda form par fisica ou juridica
			pessoa = "fisica";
			$j("input:radio[name=pessoa_txt]").bind("change", function(){
				if ($j("input[name='pessoa_txt']:checked").val() == 'fisica') {
                	pessoa = "fisica";
            	}
            	if ($j("input[name='pessoa_txt']:checked").val() == 'juridica') {
                	pessoa = "juridica";
            	}
            	cpf_cnpj_stats = false;
            	$j("#resp_pessoa").html("");
            	if(pessoa == "fisica"){
            		$j("#cpf_cnpj").val("");
            		$j("#cpf_cnpj").mask("000.000.000-00");
            		$j("#cpf_cnpj").attr("placeholder", "CPF...");
            	}else{
     				$j("#cpf_cnpj").val("");
     				$j("#cpf_cnpj").mask("00.000.000/0000-00");
     				$j("#cpf_cnpj").attr("placeholder", "CNPJ...");
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
					senha_stats = false;
				}
				if(forca>=25 && forca <50){
					$j("#forca").html("<strong>Fraca</strong>");
					$j("#forca").css("color", "red");
					senha_stats = false;
				}else if(forca>=50 && forca <75){
					$j("#forca").html("<strong>Média</strong>");
					$j("#forca").css("color", "orange");
					senha_stats = true;
				}else if(forca>=75 && forca < 100){
					$j("#forca").html("<strong>Forte</strong>");
					$j("#forca").css("color", "green");
					senha_stats = true;
				}else if(forca==100){
					$j("#forca").html("<strong>Muito Forte</strong>");
					$j("#forca").css("color", "darkgreen");
					senha_stats = true;
				}
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
			        			$j("#resp_email").html("<img src='./assets/images/icone_ok1.png' height='29' width='29'>");
			        			email_stats = true;
			        		}else{  
			        			$j("#resp_email").css("color", "red");
			        			email_stats = false;
			        		}
			        	},
			        	error:function(){
			        		console.log("error no ajax");
			        	}

			        	});


			    }else{
			        $j("#resp_email").html("<img src='./assets/images/errado.png' height='29' width='29'>");  
			        $j("#resp_email").css("color", "red"); 
			        email_stats = false;
			    }
			}else{
			    $j("#resp_email").html("Digite um e-mail");
			    $j("#resp_email").css("color", "black");
			    email_stats = false;
			}

			});
			
			//ajax verificando se cpf/cnpj existe

			var cpf_cnpj="";
			
				$j("#cpf_cnpj").bind("keyup",function(){
					cpf_cnpj = $j(this).val();
					if(pessoa=="fisica"){
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
					        			$j("#resp_pessoa").html("<img src='./assets/images/icone_ok1.png' height='29' width='29'>");
					        			cpf_cnpj_stats = true;
					        		}else{  
					        			$j("#resp_pessoa").css("color", "red");
					        			cpf_cnpj_stats = false;
					        		}
					        	},
					        	error:function(){
					        		console.log("error no ajax");
					        	}
				        	});
						}else if(cpf_cnpj.length == 0){
							$j("#resp_pessoa").html("Digite um CPF");
							$j("#resp_pessoa").css("color", "black");
							cpf_cnpj_stats = false;
						}else{
							$j("#resp_pessoa").html("<img src='./assets/images/errado.png' height='29' width='29'>");
							$j("#resp_pessoa").css("color", "red");
							cpf_cnpj_stats = false;
						}
					}else{
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
				        			$j("#resp_pessoa").html("<img src='./assets/images/icone_ok1.png' height='29' width='29'>");
				        			cpf_cnpj_stats = true;
				        		}else{  
				        			$j("#resp_pessoa").css("color", "red");
				        			cpf_cnpj_stats = false;
				        		}
				        	},
				        	error:function(){
				        		console.log("error no ajax");
				        	}
			        		});
						}else if(cpf_cnpj.length == 0){
						    $j("#resp_pessoa").html("Digite um CNPJ");
							$j("#resp_pessoa").css("color", "black");
							cpf_cnpj_stats = false;
						}else{
							$j("#resp_pessoa").html("<img src='./assets/images/errado.png' height='29' width='29'>");
							$j("#resp_pessoa").css("color", "red");
							cpf_cnpj_stats = false;
						}
					}
				});

				

				$j("#telefone").bind("keyup",function(){
					var digitos = $j(this).val();
					if(digitos.length == 15){
						telefone_stats = true;
					}else{
						telefone_stats = false;
					}
				});

				$j("#form_cadastro").bind("submit",function(e){
					e.preventDefault();
					if(!email_stats){
						$j("#email").focus();
					}else if(!senha_stats){
						$j("#senha").focus();
					}else if(!telefone_stats){
						$j("#telefone").focus();
					}else if(!cpf_cnpj_stats){
						$j("#cpf_cnpj").focus();
					}else{
						$j.ajax({
				        	type:'POST',
				        	url:'cadastro/cadastrar',
				        	data:$j("#form_cadastro").serialize(),
				        	success:function(){
				        		window.location.href = "login";
				        	},
				        	error:function(){
				        		console.log("error no ajax");
				        	}
			        	});
					}
				});
				*/


