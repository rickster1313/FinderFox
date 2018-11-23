var $j = jQuery.noConflict();
$j(document).ready(function () {
    function deg2rad(angle) {
        return angle * 0.017453292519943295;
    }
    function number_format(numero, decimal, decimal_separador, milhar_separador) {
        numero = (numero + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+numero) ? 0 : +numero,
                prec = !isFinite(+decimal) ? 0 : Math.abs(decimal),
                sep = (typeof milhar_separador === 'undefined') ? ',' : milhar_separador,
                dec = (typeof decimal_separador === 'undefined') ? '.' : decimal_separador,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
        // Fix para IE: parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }

        return s.join(dec);
    }
    function distanciaPontos(lat1, lon1, lat2, lon2) {
        lat1 = deg2rad(lat1);
        lat2 = deg2rad(lat2);
        lon1 = deg2rad(lon1);
        lon2 = deg2rad(lon2);
        dist = (6371 * Math.acos(Math.cos(lat1) * Math.cos(lat2) * Math.cos(lon2 - lon1) + Math.sin(lat1) * Math.sin(lat2)));
        dist = number_format(dist, 2, '.', '');
        return dist;
    }
    function montarAVs(pagina){
        console.log(dados);
        var total = dados.length;
        var pagina_size = 3;
        if(typeof pagina == 'undefined'){
            var pagina_num = 1;
        }else{
            var pagina_num = pagina;
        }
        var offset = (pagina_num * pagina_size)-pagina_size;
        var x =0;
        for(var i = offset ; i < total; i++){
            if(x === pagina_size){
                break;
            }
            x++;
            $j("#all_avs ul").append("<a href='../../"+dados[i].url+"'><li>"+dados[i].nome_av+" - ID: "+dados[i].id_end+"</li></a>");
        }
        var numbers = Math.ceil(total/pagina_size);
        for(var z = 1; z <= numbers; z++){
            if(pagina_num == z){
                $j("#paginat").append("<a class='mudar_pag active'>"+z+"</a>");
            }else{
                $j("#paginat").append("<a class='mudar_pag'>"+z+"</a>");
            }
            
        }
        
    }
    $j(document).on('click', '.mudar_pag', function(){
        $j("#all_avs ul").html("");
        $j("#paginat").html("");
        montarAVs($j(this).html());
    });
    function loadAV(cep) {
        dados = new Array();
        $j.ajax({
            url: "../getAVs",
            dataType: "json",
            success: function (avs) {
                $j.ajax({
                    url: "../getEndOn",
                    dataType: "json",
                    success: function (ends) {
                        $j.ajax({
                            url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + cep + "&key=AIzaSyBKs6xziUpkbpZUFEqUl4XMgNvLtFbL_gM",
                            dataType: "json",
                            success: function (coord) {
                                //console.log(coord);
                                //console.log(avs);
                                //console.log(ends);
                                lat = coord.results[0].geometry.location.lat;
                                lon = coord.results[0].geometry.location.lng;
                                for (i in avs) {
                                    for (z in ends) {
                                        if(ends[z].user_id === avs[i].user_id){
                                            var dist = distanciaPontos(lat, lon,ends[z].lat , ends[z].lon);
                                            dist = parseFloat(dist);
                                            
                                            if(ends[z].raio == "global" ){;
                                                dados.push({"id_av":avs[i].id_av,"user_id": avs[i].user_id, "id_end":ends[z].id_end, "nome_av": avs[i].nome_av,"url": avs[i].url,"logo_av": avs[i].logo_av, "distancia":dist, "cidade":ends[z].cidade , "estado":ends[z].estado});
                                            }else{
                                                raioFloat = parseFloat(ends[z].raio);
                                                if(raioFloat >= dist){
                                                    dados.push({"id_av":avs[i].id_av,"user_id": avs[i].user_id, "id_end":ends[z].id_end, "nome_av": avs[i].nome_av,"url": avs[i].url,"logo_av": avs[i].logo_av, "distancia":dist, "cidade":ends[z].cidade , "estado":ends[z].estado});
                                                }
                                            }
                                        }
                                        
                                    }

                                }
                                montarAVs();
                            }
                        });
                    }
                });


            }
        });

    }

    $j.ajax({
        url: "../getCep",
        dataType: "json",
        success: function (json) {
            cep = json;
            loadAV(cep);
        }
    });



});