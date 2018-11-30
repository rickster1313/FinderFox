var $j = jQuery.noConflict();
		$j(document).ready(function(){
			$j(".qe").bind("click",function(){
				$j("body").css("background-color", "rgba(54,24,80,1)");
				$j(".main").fadeOut(400, function() {
    				$j(".formularioUser").show();
  				});
  			});

			$j(".qd").bind("click",function(){
				$j("body").css("background-color", "#232323");
				$j(".main").fadeOut(400, function() {
    				$j(".formularioEmpre").show();
  				});
			});


			// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

			// Aqui é parte do fisico
			pessoa = "fisica";
			$j("#novo_user .cpf_cnpj").mask("000.000.000-00");
			$j("#novo_user input[name='pessoa']").bind("change", function(){
				if ($j("#novo_user input[name='pessoa']:checked").val() == 'fisica') {
                	pessoa = "fisica";
            	}
            	if ($j("#novo_user input[name='pessoa']:checked").val() == 'juridica') {
                	pessoa = "juridica";
            	}
            	$j("#novo_user .cpf_cnpj").val("");
            	if(pessoa == "fisica"){
            		$j("#novo_user .cpf_cnpj").attr("placeholder", "CPF...");
            		$j("#novo_user .cpf_cnpj").mask("000.000.000-00");
            	}else{
            		$j("#novo_user .cpf_cnpj").attr("placeholder", "CNPJ...");
            		$j("#novo_user .cpf_cnpj").mask("00.000.000/0000-00");
            	}
			});

			email_stats = false;
			telefone_stats = false;
			cpf_cnpj_stats = false;
			senha_stats = false;

			$j("#novo_user .telefone").mask("(00) 000000000");

			$j("#novo_user").bind("submit",function(e){
				e.preventDefault();
				email = $j(this).serialize();
			    $j.ajax({
			        type:'POST',
			        url:"cadastro/verificaEmail",
			        data:email,
			        async: false,
			        dataType:'json',
			        success:function(json){
			        	if(json.status == true){
			        		email_stats = true;
			        	}else{
			        		email_stats = false;
			        	}
			        },
			        error:function(){
			        	console.log("error no ajax");
			        }
			    });

			    var telefone = $j("#novo_user .telefone").val();
			    if(telefone.length >=13){
			    	telefone_stats = true;
			    }else{
			    	telefone_stats = false;
			    }
			   
			    cpf_cnpj = $j("#novo_user .cpf_cnpj").val();
					
					if((cpf_cnpj.length == 14 && pessoa=="fisica") || (cpf_cnpj.length == 18 && pessoa=="juridica")) {
						cpf_cnpj = $j(this).serialize();
				        $j.ajax({
					        type:'POST',
					        url:'cadastro/verificaCPF_CNPJ',
					       	data:cpf_cnpj,
					       	async: false,
					       	dataType:'json',
					       	success:function(json){
					       		if(json.status == true){
					       			cpf_cnpj_stats = true;
					       		}else{
					       			cpf_cnpj_stats = false;
					       		}
				        	},
				        	error:function(){
				        		console.log("error no ajax");
				        	}
				        });
					}else{
						cpf_cnpj_stats = false;
					}
				var senha = $j("#novo_user .senha").val();
				var confirmSenha = $j("#novo_user .senha_confirm").val();
				if(senha == confirmSenha){
					senha_stats = true;
				}else{
					senha_stats = false;
				}
				
				if(!email_stats){
					$j("#novo_user .email").focus();
					$j("#novo_user .email").css("border-color", "#de777f");
				}else if(!telefone_stats){
					$j("#novo_user .telefone").focus();
					$j("#novo_user .telefone").css("border-color", "#de777f");
				}else if(!cpf_cnpj_stats){
					$j("#novo_user .cpf_cnpj").focus();
					$j("#novo_user .cpf_cnpj").css("border-color", "#de777f");
				}else if(!senha_stats){
					$j("#novo_user .senha_confirm").focus();
				}else{
					$j.ajax({
				       	type:'POST',
				       	url:'cadastro/cadastrar',
				       	data:$j("#novo_user").serialize()+"&user=one",
				       	async: false,
				        success:function(){
				       		window.location.href = "login";
				      	},
				        error:function(){
				      		console.log("error no ajax");
				       	}
			        });
				}		
					

			});

			// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

			// Aqui é parte do Juridico
			email_stats2 = false;
			telefone_stats2 = false;
			cpf_cnpj_stats2 = false;
			senha_stats2 = false;
			endereco_stats = false;

			pessoa2 = "fisica";
			$j("#novo_empre .cpf_cnpj").mask("000.000.000-00");
			$j("#CEP").mask("00000-000");
			$j("#novo_empre input[name='pessoa']").bind("change", function(){
				if ($j("#novo_empre input[name='pessoa']:checked").val() == 'fisica') {
                	pessoa2 = "fisica";
            	}
            	if ($j("#novo_empre input[name='pessoa']:checked").val() == 'juridica') {
                	pessoa2 = "juridica";
            	}
            	$j("#novo_empre .cpf_cnpj").val("");
            	if(pessoa2 == "fisica"){
            		$j("#novo_empre .cpf_cnpj").attr("placeholder", "CPF");
            		$j("#novo_empre .cpf_cnpj").mask("000.000.000-00");
            	}else{
            		$j("#novo_empre .cpf_cnpj").attr("placeholder", "CNPJ");
            		$j("#novo_empre .cpf_cnpj").mask("00.000.000/0000-00");
            	}
			});

			

			$j("#novo_empre .telefone").mask("(00) 000000000");

			$j("#novo_empre").bind("submit",function(e){
				e.preventDefault();
				email = $j(this).serialize();
			    $j.ajax({
			        type:'POST',
			        url:"cadastro/verificaEmail",
			        data:email,
			        async: false,
			        dataType:'json',
			        success:function(json){
			        	if(json.status == true){
			        		email_stats2 = true;
			        	}else{
			        		email_stats2 = false;
			        	}
			        },
			        error:function(){
			        	console.log("error no ajax");
			        }
			    });

			    var telefone = $j("#novo_empre .telefone").val();
			    if(telefone.length >=13){
			    	telefone_stats2 = true;
			    }else{
			    	telefone_stats2 = false;
			    }
			   
			    cpf_cnpj = $j("#novo_empre .cpf_cnpj").val();
					
					if((cpf_cnpj.length == 14 && pessoa2=="fisica") || (cpf_cnpj.length == 18 && pessoa2=="juridica")) {
						cpf_cnpj = $j(this).serialize();
				        $j.ajax({
					        type:'POST',
					        url:'cadastro/verificaCPF_CNPJ',
					       	data:cpf_cnpj,
					       	async: false,
					       	dataType:'json',
					       	success:function(json){
					       		if(json.status == true){
					       			cpf_cnpj_stats2 = true;
					       		}else{
					       			cpf_cnpj_stats2 = false;
					       		}
				        	},
				        	error:function(){
				        		console.log("error no ajax");
				        	}
				        });
					}else{
						cpf_cnpj_stats2 = false;
					}
				var senha = $j("#novo_empre .senha").val();
				var confirmSenha = $j("#novo_empre .senha_confirm").val();
				if(senha == confirmSenha){
					senha_stats2 = true;
				}else{
					senha_stats2 = false;
				}
				
				if(!email_stats2){
					$j("#novo_empre .email").focus();
					$j("#novo_empre .email").css("border-color", '#de777f');
					alert('Email Invalido');
				}else if(!telefone_stats2){
					$j("#novo_empre .telefone").focus();
					$j("#novo_empre .telefone").css("border-color", '#de777f');
				}else if(!cpf_cnpj_stats2){
					$j("#novo_empre .cpf_cnpj").focus();
					$j("#novo_empre .cpf_cnpj").css("border-color", '#de777f');
				}else if(!senha_stats2){
					$j("#novo_empre .senha_confirm").focus();
					$j("#novo_empre .senha_confirm").css("border-color", '#de777f');
				}else if(!endereco_stats){
					$j("#CEP").focus();
				}else{
					$j.ajax({
				       	type:'POST',
				       	url:'cadastro/cadastrar',
				       	data:$j("#novo_empre").serialize()+"&user=two",
				       	async: false,
				        success:function(){
				       		window.location.href = "login";
				      	},
				        error:function(){
				      		console.log("error no ajax");
				       	} 
			        });
				}		
					

			}); // Fim do processo do form do empre


			$j("#CEP").bind("keyup", function(){
				cep = $j("#CEP").val();
				if (cep.length == 9) {
					$j.ajax({
			        	type:'GET',
			        	url:"https://viacep.com.br/ws/"+cep+"/json/",
			        	dataType:'json',
			        	success:function(json){
			        		if (typeof json.erro !== "undefined" || json.erro == true) {
			        			$j("#erro").css("display", "block");
			        			$j("#localiza").css("display", "none");
			        		}else{
			        			$j("#erro").css("display", "none");
								$j("#localiza").css("display", "block");
			        			$j("#rua").val(json.logradouro);
			        			$j("#estado").val(json.uf);
			        			$j("#cid").val(json.localidade);
			        			endereco_stats = true;
			        		}
			        	},
			        	error:function(){
			        		console.log("error no ajax");
			        	}

			        	});
				}else{
					$j("#erro").css("display", "none");
					$j("#localiza").css("display", "none");
				}
				
			});
			    
 		
		
		}); 
