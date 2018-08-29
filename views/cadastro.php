<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/animate.css" />
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>



        <style type="text/css">
            .container-fluid{
                padding: 0px;
            }

            .main{
                position: absolute;
                height: 100%;
                width: 100%;
            }

            .qua-es{
                background-color: white;
                border: #fff solid 2px;
            }
            .qua-di{
                background-color: white;
                border: #fff solid 2px;
            }

            .formularioUser{
                display: none;

            }

            .formularioEmpre{
                display: none;

            }
            .esquerda{
                background: linear-gradient(45deg, #68319B, #361850);
                position: absolute;
                left: 0px;
                width: 50%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .direita{
                background: #fff;
                position: absolute;
                right: 0px;
                width: 50%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            @media only screen and (min-width: 780px){
                .qua-es{
                    width: 360px;
                    height: 360px;
                    justify-content: center;
                    display: flex;
                    align-items: center;
                }
                .qua-di{
                    width: 360px;
                    height: 360px;
                }

                .botao-voltar{
                    width: 100px;
                }
            }
            @media only screen and (max-width: 780px){
                .qua-es{
                    width: 200px;
                    height: 200px;
                }
                .qua-di{
                    width: 200px;
                    height: 200px;
                }


            }
            .botao-voltar{
                border-radius: 15px; 
                border: 2px solid; 
                font-size: 18px;
                position: absolute;
                z-index: 2;
                top: 5px;
                left: 5px;
            }
            .formularios{
                padding-top: 100px;
                padding-left: 120px; 
            }
            .formularios form{
                padding-left: 130px;

            }

            @font-face {

                font-family: "BPreplayBold";
                src: url("assets/fonts/BPreplayBold.otf") format("opentype");

            }


            .replay-font{
                font-family: "BPreplayBold";
                font-size: 25px;  
            }

            @font-face {

                font-family: "Champagne & Limousines Bold";
                src: url("assets/fonts/Champagne & Limousines Bold.ttf") format("truetype");

            }

            .film-font{
                font-family: "Champagne & Limousines Bold";
                font-size: 20px;  
            }  

            body{
                font-family: 'Bree Serif', serif;
            }

            .header{
                width: 100%;
                background-color: #361850; 
                overflow: hidden;
            }

            .container-fluid{
                padding: 0px;
            }

            .replay-font{
                font-family: "BPreplayBold";
                font-size: 29px;
                padding: 15px;
                margin-left: 1100px;
            }

            input[type=text]:focus{
                box-shadow: none;
                border-color: #fff;
            }
            input[type=email]:focus{
                box-shadow: none;
                border-color: #fff;
            }
            input[type=password]:focus{
                box-shadow: none;
                border-color: #fff;
            }


        </style>
    </head>
    <body>



        <div class="container-fluid">

            <div class="container-fluid">

                <a href="<?php echo BASE_URL; ?>">
                    <img src="<?php echo BASE_URL; ?>assets/images/seta.png" style="width: 51px; position: absolute; z-index: 2;
                         margin-top: 11px; margin-left: 11px;">
                </a>

                <div class="main">

                    <div class="esquerda grid cs-style-1">

                        <figure>
                            <div class="display-4" style="width: 400px; height: 300px; border: 4px solid #fff; color: #F9F9F9"> Usuario 
                                <img src="<?php echo BASE_URL; ?>assets/images/Guest_theapplication_2906.png" width="200" style=" left:25%; transform: translate(-25%);"></div>
                            <figcaption>
                                <h3>Usuario</h3>

                                <button class="btn btn-outline-light qe " style="border-radius: 15px;">Cadastrar-se</button>
                            </figcaption>
                        </figure>


                    </div>
                    <div class="direita grid cs-style-1" style="display: flex;justify-content: center;">
                        <figure>
                            <div class="display-4" style="width: 400px; height: 300px; border: 4px solid #232323; color: #232323" >Empresário <img src="<?php echo BASE_URL; ?>assets/images/businessman_3435.png" width="200" style="left:25%; transform: translate(-25%);"></div>

                            <figcaption>
                                <h3>Empresário</h3>

                                <button class="btn btn-outline-light qd " style="border-radius: 15px;">Cadastrar-se</button>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="container" style="background-image: url(assets/images/fundo.jpg); background-size: cover;">
                <div class="row">
                    <div class="col-md-12" style="">
                        <div class="formularioUser" style="color: white">
                            <div class="formularios" style="">
                                <hr><h1 class="">Dados de perfil do usuário</h1>



                                <form method="POST" id="novo_user" class="" style=" left: 20%; transform: translate(-20%);">
                                    <div class="form-group slideInLeft animated">
                                        <label class="" style="font-size: 20px;">Nome</label> <input type="text" class="form-control" name="nome_txt" required="required" style="outline: none;color: #d3d3d3; background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                                    </div>

                                    <div class="form-group slideInRight animated">
                                        <label class="" style="font-size: 20px;">E-mail</label> <input class="email form-control" type="email" name="email_txt" required="required" style="outline: none;color: #d3d3d3;background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                                    </div>

                                    <div class="form-group slideInLeft animated">
                                        <label class="" style="font-size: 20px;">Telefone</label> <input class="telefone form-control" type="text" name="telefone_txt" required="required" style="outline: none;color: #d3d3d3; background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                                    </div>

                                    <div class="form-group slideInRight animated">
                                        <label class="" style="font-size: 20px;">Tipo de pessoa</label> <br>
                                        <input type="radio" name="pessoa" value="fisica" checked="checked">Física 
                                        <input type="radio" name="pessoa" value="juridica">Jurídica<br>
                                    </div>

                                    <div class="form-group slideInLeft animated">
                                        <input class="cpf_cnpj form-control" type="text" name="cpf_cnpj_txt" required="required" placeholder="CPF..." style="color: #d3d3d3; background:transparent; border-radius: 15px; border: 2px solid #fff;"><br><br>
                                    </div>

                                    <div class="form-group slideInRight animated">
                                        <label class="" style="font-size: 20px;">Senha</label> <input class="senha form-control" type="password" name="senha_txt" required="required" style="outline: none;color: #d3d3d3; background:transparent; border-radius: 15px; border: 2px solid #fff;"> <br>
                                    </div>

                                    <div class="form-group slideInLeft animated">
                                        <label class="" style="font-size: 20px;">Confirmar senha</label> <input type="password" class="form-control senha_confirm" name="senha_confirm_txt" required="required" style="outline: none;color: #d3d3d3; background:transparent; border-radius: 15px; border: 2px solid #fff;"> <br>
                                    </div>


                                    <input type="submit" name="novo_user" value="Cadastrar" class="btn btn-outline-light wow slideInRight">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="background-image: url(assets/images/fundo2.jpg); background-size: cover;">
                <div class="formularioEmpre" style="color: white">
                    <div class="formularios">
                        <hr>
                        <h1 class="">Dados de perfil do Empresário</h1><br><br>

                        <form method="POST" id="novo_empre" style=" left: 30%; transform: translate(-20%);">
                            <div class="form-group slideInLeft animated">
                                <label class="" style="font-size: 20px;">Nome</label> <input type="text" name="nome_txt" class="form-control" required="required" style="outline: none;background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                            </div>

                            <div class="form-group slideInRight animated">
                                <label class="" style="font-size: 20px;">e-mail</label> <input class="email form-control" type="email" name="email_txt" required="required" style="outline: none;background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                            </div>

                            <div class="form-group slideInLeft animated">
                                <label class="" style="font-size: 20px;">telefone</label> <input class="telefone form-control" type="text" name="telefone_txt" required="required" style="outline: none;background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                            </div>

                            <div class="form-group slideInRight animated">
                                <label class="" style="font-size: 20px;">Tipo de pessoa</label> - 
                                <input type="radio" name="pessoa" value="fisica" checked="checked" class="film-font" style="font-size: 18px;">Física 
                                <input type="radio" name="pessoa" value="juridica" class="film-font" style="font-size: 18px;">Jurídica<br>
                            </div>

                            <div class="form-group slideInLeft animated">
                                <label class="" style="font-size: 20px;" id="label_cpf">CPF</label><input class="cpf_cnpj form-control" type="text" name="cpf_cnpj_txt" required="required" style="outline: none;background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                            </div>

                            <div class="form-group slideInRight animated">
                                <label class="" style="font-size: 20px;">senha</label> <input type="password" class="form-control" name="senha_txt" required="required" style="outline: none;background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                            </div>

                            <div class="form-group slideInLeft animated">
                                <label class="" style="font-size: 20px;">Confirmar senha</label> <input type="password" class="form-control" name="senha_confirm" required="required" style="outline: none;background:transparent; border-radius: 15px; border: 2px solid #fff;"> <br>
                            </div>


                            <hr><h1 style="" class="">Dados de localização</h1><br><br>
                            <div class="form-group slideInRight animated">
                                <label class="film-font" style="font-size: 20px;">CEP</label> <input id="CEP" type="text" name="cep_txt" class="form-control" style="background:transparent; border-radius: 15px; border: 2px solid #fff;">
                                <label style="display: none;" id="erro">ERRO: cep invalido</label>
                            </div>
                            <div id="localiza" style="display: none">
                                <div class="form-group slideInLeft animated">
                                    <label class="" style="font-size: 20px;">Rua</label> <input id="rua" type="text" name="rua_txt" class="form-control" style="background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                                </div>

                                <div class="form-group slideInRight animated">
                                    <label class="" style="font-size: 20px;">Estado</label> <input id="estado" type="text" name="estado_txt" class="form-control" style="background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                                </div>

                                <div class="form-group slideInLeft animated">
                                    <label class="" style="font-size: 20px;">Cidade</label> <input id="cid" type="text" name="cid_txt" class="form-control" style="background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                                </div>

                                <div class="form-group slideInRight animated">
                                    <label class="" style="font-size: 20px;">Nº</label> <input id="num" type="text" name="num_txt" class="form-control" style="background:transparent; border-radius: 15px; border: 2px solid #fff;"><br>
                                </div>

                                <input type="submit" name="novo_empre" value="Cadastrar" class="btn btn-outline-light">
                            </div>


                        </form>
                    </div>
                </div>
            </div>

            <script>


            </script>



            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/modernizr.custom.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/toucheffects.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/wow.js"></script>	
            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.easing.1.3.js"></script>	
    </body>
</html>