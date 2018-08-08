var $j = jQuery.noConflict();
$j(document).ready(function(){ 

    function abrir(){
                if(aberto == 1) {
                    aberto =2;
                    document.getElementById("main").style.marginLeft = "220px";
                    document.getElementById("mySidebar").style.width = "220px";
                    document.getElementById("mySidebar").style.display = "block";
                } else {
                    aberto=1;
                    document.getElementById("main").style.marginLeft = "0%";
                    document.getElementById("mySidebar").style.display = "none";
                    document.getElementById("openNav").style.display = "inline-block";
                }
            }
            aberto = 2;
            $j("#openNav").bind("click", function(){
                abrir(); 
            }); 
            abrir();
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
                url:"http://apps.widenet.com.br/busca-cep/api/cep.json?code="+cep,
                dataType:'json',
                success:function(json){
                    if (json.status == 0 ) {
                        $j("#not_cep").css("display", "block");
                        $j("#novo_part2").css("display", "none");
                        $j("#not_cep").html(json.message);
                    }else{
                        $j("#not_cep").css("display", "none");
                        $j("#novo_part2").css("display", "block");
                        $j("#rua").val(json.address);
                        $j("#cid").val(json.city);
                        $j("#est").val(json.state);

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
            

        }else{
            $j("#raio"+newid).focus();
        }
        console.log("id:"+newid+" opcao:"+op+" pai:"+raio);/*
        $j.ajax({
            type:'POST',
            url:'empresario/activeEnd',
            data:"idactive="+newid+"&opcao="+op,
            async: false,
            success:function(){
                window.location.href = "login";
            },
            error:function(){
                 console.log("error no ajax");
            }
        });*/
    });

});