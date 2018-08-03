var $j = jQuery.noConflict();
$j(document).ready(function(){ 
    function abrir(){
                if(aberto == 1) {
                    aberto =2;
                    tamanhoMenu = document.getElementById("mySidebar").style.width;
                    document.getElementById("main").style.marginLeft = tamanhoMenu;
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

});