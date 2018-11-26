var $j = jQuery.noConflict();
$j(document).ready(function () {


    nome_av_stats = false;
    url_av_stats = false;


    $j("#nome_av").bind("keyup", function () {
        var dados = $j(this).val();
        if (dados == "") {
            nome_av_stats = false;
            $j('#nome_av').css('border', 'black solid 1px');
        } else {
            dados = $j(this).serialize();
            $j.ajax({
                type: 'POST',
                url: 'empresario/verificaNomeAV',
                data: dados,
                dataType: 'json',
                success: function (json) {
                    if (json.status == 'yes') {
                        nome_av_stats = false;
                        $j('#nome_av').css('border', 'red solid 1px');
                    } else {
                        nome_av_stats = true;
                        $j('#nome_av').css('border', 'green solid 1px');
                    }
                },
                error: function () {
                    console.log("error no ajax");
                }
            });
        }
        var nomeAv = $j(this).val();
        nomeAv = nomeAv.replace(/ /g, '-');

        $j('#url_av').val(nomeAv);
        var dados2 = $j("#url_av").serialize();
        $j.ajax({
            type: 'POST',
            url: 'empresario/verificaUrlAV',
            data: dados2,
            dataType: 'json',
            success: function (json) {
                if (json.status_url == 'yes') {
                    url_av_stats = false;
                    $j('#url_av').css('color', 'red');
                } else {
                    url_av_stats = true;
                    $j('#url_av').css('color', 'green');
                }
            },
            error: function () {
                console.log("error no ajax");
            }
        });

    });

    $j("#url_av").bind("keyup", function () {
        var urlAv = $j(this).val();
        urlAv = urlAv.replace(/ /g, '');
        $j(this).val(urlAv);

        var dados = $j(this).val();
        if (dados == "") {
            nome_av_stats = false;
            $j('#url_av').css('color', 'black');
        } else {
            dados = $j(this).serialize();
            $j.ajax({
                type: 'POST',
                url: 'empresario/verificaUrlAV',
                data: dados,
                dataType: 'json',
                success: function (json) {
                    if (json.status_url == 'yes') {
                        url_av_stats = false;
                        $j('#url_av').css('color', 'red');
                    } else {
                        url_av_stats = true;
                        $j('#url_av').css('color', 'green');
                    }
                },
                error: function () {
                    console.log("error no ajax");
                }
            });
        }

    });

    $j("#form_newAV").bind("submit", function (e) {
        e.preventDefault();

        if (!nome_av_stats) {
            $j("#nome_av").focus();
        } else if (!url_av_stats) {
            $j("#url_av").focus();
        } else {
            var form = $j(this)[0];
            var allDados = new FormData(form);
            $j.ajax({
                type: 'POST',
                url: 'empresario/novoAV',
                data: allDados,
                contentType: false,
                processData: false,
                success: function () {
                    window.location.href = "empresario";
                },
                error: function () {
                    console.log("error no ajax");
                }
            });
        }

    });

    $j('[data-toggle="tooltip"]').tooltip();
    $j('[data-toggle="tooltip1"]').tooltip();
    $j('[data-toggle="popover"]').popover();
    $j('[data-toggle="popover1"]').popover();

    $j("#btn_novo_end").bind("click", function () {
        $j("#modalEnd").modal("show");
    });
    $j("#cep_novo").mask("00000-000");
    $j("#cep_novo").bind("keyup", function () {
        cep = $j(this).val();
        if (cep.length == 9) {
            $j.ajax({
                type: 'GET',
                url: "https://viacep.com.br/ws/" + cep + "/json/",
                dataType: 'json',
                success: function (json) {
                    if (typeof json.erro !== "undefined" || json.erro == true) {
                        $j("#not_cep").css("display", "block");
                        $j("#novo_part2").css("display", "none");
                        $j("#not_cep").html("CEP não encontrado");
                    } else {
                        $j("#not_cep").css("display", "none");
                        $j("#novo_part2").css("display", "block");
                        $j("#rua").val(json.logradouro);
                        $j("#cid").val(json.localidade);
                        $j("#est").val(json.uf);

                    }
                },
                error: function () {
                    console.log("error no ajax");
                }
            });
        } else {
            $j("#novo_part2").css("display", "none");
            $j("#not_cep").css("display", "none");
        }
    });
    $j("#form_novo_end").bind("submit", function (e) {
        e.preventDefault();

        $j.ajax({
            type: 'POST',
            url: 'cadastro/cadastrar',
            data: $j("#form_novo_end").serialize() + "&user=three",
            async: false,
            success: function () {
                window.location.href = "login";
            },
            error: function () {
                console.log("error no ajax");
            }
        });
    });


    $j("#menu_av").bind('click', function () {
        if (valor == 1) {
            $j('#myModal').modal('show');
        }
    });
    $j(".btn_alt").bind("click", function () {
        var model_alt = $j(this).val();
        $j('#' + model_alt).modal('show');
    });
    $j(".btn_del").bind("click", function () {
        var id = $j(this).val();
        var newid = id.substring(2, id.length);
        if (confirm("Deseja mesmo excluir este endereço?")) {
            $j.ajax({
                type: 'POST',
                url: 'empresario/deleteEnd',
                data: 'iddel=' + newid,
                async: false,
                success: function () {
                    window.location.href = "login";
                },
                error: function () {
                    console.log("error no ajax");
                }
            });
        }

    });
    $j("form[name=form_alterar_end]").bind("submit", function (form) {
        form.preventDefault();
        var id = $j(this).attr("id");
        var newid = id.substring(2, id.length);
        var dadoszinho = $j(this).serialize();

        $j.ajax({
            url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + $j(this).find(".cep_alt").val() + "&key=AIzaSyBKs6xziUpkbpZUFEqUl4XMgNvLtFbL_gM",
            dataType: "json",
            success: function (coord) {
                lat = coord.results[0].geometry.location.lat;
                lon = coord.results[0].geometry.location.lng;

                $j.ajax({
                    type: 'POST',
                    url: 'empresario/alterarEnd',
                    data: dadoszinho + "&idpass=" + newid + "&lati=" + lat + "&longi=" + lon,
                    async: false,
                    success: function () {
                        window.location.href = "login";
                    },
                    error: function () {
                        console.log("error no ajax");
                    }
                });
            }
        });


    });
    $j(".cep_alt").mask("00000-000");
    $j(".cep_alt").bind("keyup", function () {
        cep = $j(this).val();
        if (cep.length == 9) {
            $j.ajax({
                type: 'GET',
                url: "https://viacep.com.br/ws/" + cep + "/json/",
                dataType: 'json',
                success: function (json) {

                    if (typeof json.erro !== "undefined" || json.erro == true) {
                        $j(".not_cep_alt").css("display", "block");
                        $j(".alt_part2").css("display", "none");
                        $j(".not_cep_alt").html("CEP não encontrado");
                    } else {
                        $j(".not_cep_alt").css("display", "none");
                        $j(".alt_part2").css("display", "block");
                        $j(".alt_rua").val(json.logradouro);
                        $j(".alt_cid").val(json.localidade);
                        $j(".alt_est").val(json.uf);
                    }
                },
                error: function () {
                    console.log("error no ajax");
                }
            });


        } else {
            $j(".alt_part2").css("display", "none");
            $j(".not_cep_alt").css("display", "none");
        }
    });
    $j("button[name=btn_on_off]").bind("click", function (button) {
        var id = $j(this).attr("id");
        var op = $j(this).val();
        var newid = id.substring(2, id.length);
        var raio = $j("#raio" + newid).val();
        if (op == "ativar") {
            if (raio.length > 0) {
                raio = raio.toLowerCase()
                if (raio != "global") {
                    raio = raio.replace(/ /g, '');
                    raio = raio.replace(/,/g, '.');
                }

                $j.ajax({
                    type: 'POST',
                    url: 'empresario/getEnd',
                    data: "idactive=" + newid,
                    async: false,
                    dataType: "json",
                    success: function (json) {
                        $j.ajax({
                            url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + json.cepzinho + "&key=AIzaSyBKs6xziUpkbpZUFEqUl4XMgNvLtFbL_gM",
                            dataType: "json",
                            success: function (coords) {
                                lat = coords.results[0].geometry.location.lat;
                                lon = coords.results[0].geometry.location.lng;

                                $j.ajax({
                                    type: 'POST',
                                    url: 'empresario/activeEnd',
                                    data: "idactive=" + newid + "&raio=" + raio + "&lati=" + lat + "&longi=" + lon,
                                    async: false,
                                    success: function () {
                                        window.location.href = "login";
                                    },
                                    error: function () {
                                        console.log("error no ajax");
                                    }
                                });
                            }
                        });
                    }
                });
            } else {
                $j("#raio" + newid).focus();
            }
        } else {
            $j.ajax({
                type: 'POST',
                url: 'empresario/desactiveEnd',
                data: "idactive=" + newid,
                async: false,
                success: function () {
                    window.location.href = "login";
                },
                error: function () {
                    console.log("error no ajax");
                }
            });
        }


    });
    $j("#check_sobre0").bind("change", function () {
        if (this.checked) {
            $j("#content_sobre0").slideDown();
        } else {
            $j("#content_sobre0").slideUp();
        }

    });
    $j("#check_sobre1").bind("change", function () {
        if (this.checked) {
            $j("#content_sobre1").slideDown();
        } else {
            $j("#content_sobre1").slideUp();
        }

    });

    $j("#check_sobre2").bind("change", function () {
        if (this.checked) {
            $j("#content_sobre2").slideDown();
        } else {
            $j("#content_sobre2").slideUp();
        }

    });
    $j("#check_sobre3").bind("change", function () {
        if (this.checked) {
            $j("#content_sobre3").slideDown();
        } else {
            $j("#content_sobre3").slideUp();
        }

    });
    if ($j("#check_sobre0")[0].checked) {
        $j("#content_sobre0").slideDown();
    } else {
        $j("#content_sobre0").slideUp();
    }
    if ($j("#check_sobre1")[0].checked) {
        $j("#content_sobre1").slideDown();
    } else {
        $j("#content_sobre1").slideUp();
    }
    if ($j("#check_sobre2")[0].checked) {
        $j("#content_sobre2").slideDown();
    } else {
        $j("#content_sobre2").slideUp();
    }
    if ($j("#check_sobre3")[0].checked) {
        $j("#content_sobre3 ").slideDown();
    } else {
        $j("#content_sobre3 ").slideUp();
    }
    $j("#form_att_av").bind("submit", function (e) {
        e.preventDefault();
        var dataForm = new FormData($j("#form_att_av")[0]);
        $j.ajax({
            type: 'POST',
            url: 'empresario/attAV',
            data: dataForm,
            contentType: false,
            processData: false,
            async: false,
            success: function () {
                window.location.href = "empresario";
            },
            error: function () {
                console.log("error no ajax");
            }
        });

    });
    $j(".atv_func").bind("click", function () {
        var valuer = $j(this).val();
        $j.ajax({
            url: 'empresario/ativarFunc',
            type: 'POST',
            data: {funcao: valuer},
            success: function () {
                window.location.href = "empresario";
            },
            error: function () {
                console.log("error no ajax");
            }
        });
    });
    $j(".dstv_func").bind("click", function () {
        var valuer2 = $j(this).val();
        $j.ajax({
            url: 'empresario/desativarFunc',
            type: 'POST',
            data: {funcao: valuer2},
            success: function () {
                window.location.href = "empresario";
            },
            error: function () {
                console.log("error no ajax");
            }
        });
    });


    function pararClock() {
        if (typeof msgs != "undefined") {
            clearInterval(msgs);
        }

    }
    function ligarClock() {

        $j('#mensagens').load('html/abrir/mensagens/' + idm);
        $j.ajax({
            url: "empresario/visualizou",
            type: "POST",
            data: {user: idm}
        });
    }
    $j(".pessoa ").bind("click", function () {
        pararClock();
        idm = $j(this).find('input').val();
        ligarClock();

        msgs = setInterval(ligarClock, 3000);
        $j(".type_msg").show();
        $j("#caixa_msg").val("");

        $j.ajax({
            url: "empresario/visualizou",
            type: "POST",
            data: {user: idm}
        });
    });

    $j("#enviarMsg").bind('click', function (e) {
        e.preventDefault();
        var msgChat = $j("#caixa_msg").val();
        var teste = msgChat.replace(/ /g, '');

        if (teste.length > 0) {
            $j.ajax({
                url: 'empresario/setMsg',
                type: 'POST',
                data: {msgChat: msgChat, destinatario: idm},
                success: function () {
                    $j("#caixa_msg").val("");
                }
            });
        }
    });

    $j("#myInput").on("keyup", function () {
        var value = $j(this).val().toLowerCase();
        $j(".pessoa").filter(function () {
            $j(this).toggle($j(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    function verificaLida() {
        contacts = new Array();
        for (i = 0; i < $j(".cont").length; i++) {
            var aux = $j(".cont")[i]['value'];
            contacts.push(aux);
        }
        $j.ajax({
            url: 'empresario/getInfo',
            type: 'POST',
            data: {contacts: contacts},
            dataType: 'json',
            success: function (json) {
                for (i = 0; i < $j(".cont").length; i++) {
                    $j(".cont[value=" + $j(".cont")[i]['value'] + "]").parent().parent().find(".noti").html(json[i] == 0 ? "" : json[i]);
                }


            }
        });

    }
    function start() {
        init = setInterval(verificaLida, 3000);
    }

    if (teste == 3) {
        start();
        verificaLida();
    }

    $j(".A").bind('click', function () {
        link = $j(this).attr("src");
    });

    $j("#alterarPerf").bind('click', function (e) {
        e.preventDefault();

        var nome = $j("#nomeT").val();
        var senhaA = $j("#senhaT").val();
        var senhaN = $j("#confsenha").val();

        if (typeof senhaN != "undefined") {
            $j.ajax({
                url: 'empresario/alterarUser',
                type: 'POST',
                data: {nome: nome, senha: senhaA, confsenha: senhaN, img: link},
                success: function () {
                    window.location.href = "empresario";
                }
            });
        }

    });

    // %%%%%%%%%%%%%%  Aqui é a parte de salvar as config do av  %%%%%%%%%%%%%%%%%%%%%%%

    email_stats = false;
    telefone_stats = false;
    cpf_cnpj_stats = false;
    senha_stats = false;

});