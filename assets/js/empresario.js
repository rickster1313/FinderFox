var $j = jQuery.noConflict();
$j(document).ready(function(){ 


    nome_av_stats = false;
    url_av_stats = false;


    $j("#nome_av").bind("keyup", function(){
        var dados = $j(this).val();
        if(dados == ""){
            nome_av_stats = false;
            $j('#nome_av').css('border', 'black solid 1px');
        }else{
            dados = $j(this).serialize();
            $j.ajax({
                type:'POST',
                url:'empresario/verificaNomeAV',
                data:dados,
                dataType:'json',
                success:function(json){
                    if (json.status == 'yes') {
                        nome_av_stats = false;
                        $j('#nome_av').css('border', 'red solid 1px');
                    }else{
                        nome_av_stats = true;
                        $j('#nome_av').css('border', 'green solid 1px');
                    }
                },
                error:function(){
                    console.log("error no ajax");
                }
            }); 
        }
            var nomeAv = $j(this).val();
            nomeAv = nomeAv.replace(/ /g, '-');

            $j('#url_av').val(nomeAv);
            var dados2 = $j("#url_av").serialize();
            $j.ajax({
                type:'POST',
                url:'empresario/verificaUrlAV',
                data:dados2,
                dataType:'json',
                success:function(json){
                    if (json.status_url == 'yes') {
                        url_av_stats = false;
                        $j('#url_av').css('color', 'red');
                    }else{
                        url_av_stats = true;
                        $j('#url_av').css('color', 'green');
                    }
                },
                error:function(){
                    console.log("error no ajax");
                }
            }); 
        
    });

    $j("#url_av").bind("keyup", function(){
        var urlAv = $j(this).val();
        urlAv = urlAv.replace(/ /g, '');
        $j(this).val(urlAv);

        var dados = $j(this).val();
        if(dados == ""){
            nome_av_stats = false;
            $j('#url_av').css('color', 'black');
        }else{
            dados = $j(this).serialize();
            $j.ajax({
                type:'POST',
                url:'empresario/verificaUrlAV',
                data:dados,
                dataType:'json',
                success:function(json){
                    if (json.status_url == 'yes') {
                        url_av_stats = false;
                        $j('#url_av').css('color', 'red');
                    }else{
                        url_av_stats = true;
                        $j('#url_av').css('color', 'green');
                    }
                },
                error:function(){
                    console.log("error no ajax");
                }
            }); 
        }   
        
    });

    $j("#form_newAV").bind("submit",function(e){
        e.preventDefault();
        
        if(!nome_av_stats){
            $j("#nome_av").focus();
        }else if(!url_av_stats){
            $j("#url_av").focus();
        }else{
            var form = $j(this)[0];
            var allDados = new FormData(form);  
             $j.ajax({
                type:'POST',
                url:'empresario/novoAV',
                data:allDados,
                contentType:false,
                processData:false,  
                success:function(){
                    window.location.href = "empresario";
                },
                error:function(){
                    console.log("error no ajax");
                }
            });
        }
        
    });

    $j('[data-toggle="tooltip"]').tooltip();   
    $j('[data-toggle="tooltip1"]').tooltip();  
    $j('[data-toggle="popover"]').popover();  
    $j('[data-toggle="popover1"]').popover();  

    $j("#btn_novo_end").bind("click", function(){
        $j("#modalEnd").modal("show");
    });
    $j("#cep_novo").mask("00000-000");
    $j("#cep_novo").bind("keyup", function(){
        cep = $j(this).val();
        if(cep.length == 9){
            $j.ajax({
                type:'GET',
                url:"https://viacep.com.br/ws/"+cep+"/json/",
                dataType:'json',
                success:function(json){
                    if (typeof json.erro !== "undefined" || json.erro == true) {
                        $j("#not_cep").css("display", "block");
                        $j("#novo_part2").css("display", "none");
                        $j("#not_cep").html("CEP não encontrado");
                    }else{
                        $j("#not_cep").css("display", "none");
                        $j("#novo_part2").css("display", "block");
                        $j("#rua").val(json.logradouro);
                        $j("#cid").val(json.localidade);
                        $j("#est").val(json.uf);

                    }
                },
                error:function(){
                    console.log("error no ajax");
                }
            });
        }else{
            $j("#novo_part2").css("display", "none");
            $j("#not_cep").css("display", "none");
        }
    });
    $j("#form_novo_end").bind("submit", function(e){
        e.preventDefault();

       $j.ajax({
            type:'POST',
            url:'cadastro/cadastrar',
            data:$j("#form_novo_end").serialize()+"&user=three",
            async: false,
            success:function(){
                window.location.href = "login";
            },
            error:function(){
                 console.log("error no ajax");
            }
        });
    });
    

    $j("#menu_av").bind('click', function() {
        if (valor == 1) {
            $j('#myModal').modal('show');
        }
    });
    $j(".btn_alt").bind("click", function(){
        var model_alt = $j(this).val();
        $j('#'+model_alt).modal('show');
    });
     $j(".btn_del").bind("click", function(){
        var id = $j(this).val();
        var newid = id.substring(2, id.length);
        if(confirm("Deseja mesmo excluir este endereço?")){
            $j.ajax({
            type:'POST',
            url:'empresario/deleteEnd',
            data:'iddel='+newid,
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
    $j("form[name=form_alterar_end]").bind("submit", function(form){
        form.preventDefault();
        var id = $j(this).attr("id");
        var newid = id.substring(2, id.length);
        $j.ajax({
            type:'POST',
            url:'empresario/alterarEnd',
            data:$j(this).serialize()+"&idpass="+newid,
            async: false,
            success:function(){
                window.location.href = "login";
            },
            error:function(){
                 console.log("error no ajax");
            }
        });
    });
    $j(".cep_alt").mask("00000-000");
    $j(".cep_alt").bind("keyup", function(){
        cep = $j(this).val();
        if(cep.length == 9){
                $j.ajax({
                    type:'GET',
                    url:"https://viacep.com.br/ws/"+cep+"/json/",
                    dataType:'json',
                    success:function(json){

                        if(typeof json.erro !== "undefined" || json.erro == true){
                            $j(".not_cep_alt").css("display", "block");
                            $j(".alt_part2").css("display", "none");
                            $j(".not_cep_alt").html("CEP não encontrado");
                        }else{
                            $j(".not_cep_alt").css("display", "none");
                            $j(".alt_part2").css("display", "block");
                            $j(".alt_rua").val(json.logradouro);
                            $j(".alt_cid").val(json.localidade);
                            $j(".alt_est").val(json.uf);
                        }
                    },
                    error:function(){
                        console.log("error no ajax");
                    }
                });

            
        }else{
            $j(".alt_part2").css("display", "none");
            $j(".not_cep_alt").css("display", "none");
        }
    });
    $j("button[name=btn_on_off]").bind("click", function(button){
        var id =$j(this).attr("id");
        var op =$j(this).val();
        var newid = id.substring(2, id.length);
        var raio = $j("#raio"+newid).val();
        if(raio.length > 0){
            raio = raio.toLowerCase()
            if(raio != "global"){
                raio = raio.replace(/ /g, '');
                raio = raio.replace(/,/g, '.');
            }

            $j.ajax({
                type:'POST',
                url:'empresario/activeEnd',
                data:"idactive="+newid+"&opcao="+op+"&raio="+raio,
                async: false,
                success:function(){
                    window.location.href = "login";
                },
                error:function(){
                     console.log("error no ajax");
                }
            });
        }else{
            $j("#raio"+newid).focus();
        }
       
    });
    $j("#check_sobre0").bind("change", function(){
            if(this.checked){
                $j("#content_sobre0").slideDown();
            }else{
                $j("#content_sobre0").slideUp();
            }
            
        });
    $j("#check_sobre1").bind("change", function(){
            if(this.checked){
                $j("#content_sobre1").slideDown();
            }else{
                $j("#content_sobre1").slideUp();
            }
            
        });

    $j("#check_sobre2").bind("change", function(){
            if(this.checked){
                $j("#content_sobre2").slideDown();
            }else{
                $j("#content_sobre2").slideUp();
            }
            
        }); 
    $j("#check_sobre3").bind("change", function(){
            if(this.checked){
                $j("#content_sobre3").slideDown();
            }else{
                $j("#content_sobre3").slideUp();
            }
            
        }); 
    if($j("#check_sobre0")[0].checked){
        $j("#content_sobre0").slideDown();
    }else{
        $j("#content_sobre0").slideUp();
    }
    if($j("#check_sobre1")[0].checked){
        $j("#content_sobre1").slideDown();
    }else{
        $j("#content_sobre1").slideUp();
    }
    if($j("#check_sobre2")[0].checked){
        $j("#content_sobre2").slideDown();
    }else{
        $j("#content_sobre2").slideUp();
    }
    if($j("#check_sobre3")[0].checked){
        $j("#content_sobre3 ").slideDown();
    }else{
        $j("#content_sobre3 ").slideUp();
    }
    $j("#form_att_av").bind("submit", function(e){
        e.preventDefault();
        var dataForm = new FormData($j("#form_att_av")[0]);
         $j.ajax({
                type:'POST',
                url:'empresario/attAV',
                data:dataForm,
                contentType:false,
                processData:false,
                async: false,
                success:function(){
                     window.location.href = "empresario";
                },
                error:function(){
                     console.log("error no ajax");
                }
            });

    });
    $j(".atv_func").bind("click", function(){
        var valuer = $j(this).val();
        $j.ajax({
            url: 'empresario/ativarFunc',
            type:'POST',
            data:{funcao:valuer},
            success:function(){
               window.location.href = "empresario";
            },
            error:function(){
                console.log("error no ajax");
            }
        });
    });
    $j(".dstv_func").bind("click", function(){
        var valuer2 = $j(this).val();
        $j.ajax({
            url: 'empresario/desativarFunc',
            type:'POST',
            data:{funcao:valuer2},
            success:function(){
                window.location.href = "empresario";
            },
            error:function(){
                console.log("error no ajax");
            }
        });
    });

    // %%%%%%%%%%%%%%  Aqui é a parte de salvar as config do av  %%%%%%%%%%%%%%%%%%%%%%%

    email_stats = false;
    telefone_stats = false;
    cpf_cnpj_stats = false;
    senha_stats = false;

});