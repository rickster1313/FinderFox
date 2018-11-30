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
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/main-login.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/util-login.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">



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
                overflow-x: hidden;
            }

            .header{
                width: 100%;
                background-color: #361850; 
                overflow: hidden;
            }

            .container-fluid{
                padding: 0;
            }

            .replay-font{
                font-family: "BPreplayBold";
                font-size: 29px;
                
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



        

            <div class="container-fluid" style="">

                <a href="<?php echo BASE_URL; ?>">
                    <img src="<?php echo BASE_URL; ?>assets/images/icones/icons8-voltar-52.png" style="width: 45px; position: absolute; z-index: 2;
                         margin-top: 11px; margin-left: 11px;">
                </a>

                <div class="main">

                    <div class="esquerda grid cs-style-1">

                        <figure>
                            <div class="display-4" style="width: 400px; height: 300px; border: 4px solid #fff; color: #F9F9F9"> Usuario 
                                <img src="<?php echo BASE_URL; ?>assets/images/Guest_theapplication_2906.png" width="200" style=" left:50%; transform: translate(-50%);"></div>
                            <figcaption>
                                <h3>Usuario</h3>

                                <button class="btn btn-outline-light qe " style="border-radius: 15px;">Cadastrar-se</button>
                            </figcaption>
                        </figure>


                    </div>
                    <div class="direita grid cs-style-1" style="display: flex;justify-content: center;">
                        <figure>
                            <div class="display-4" style="width: 400px; height: 300px; border: 4px solid #232323; color: #232323" >Empresário <img src="<?php echo BASE_URL; ?>assets/images/businessman_3435.png" width="200" style="left:50%; transform: translate(-50%);"></div>

                            <figcaption>
                                <h3>Empresário</h3>

                                <button class="btn btn-outline-light qd " style="border-radius: 15px;">Cadastrar-se</button>
                            </figcaption>
                        </figure>
                    </div>
                </div>
        
            
                <div class="row d-flex align-items-center">
                    <div class="col-md-12" style="">
                        <div class="formularioUser" style="color: white">
                            <div class="formularios" style="">
                              <center>
                                <div class="limiter">
                                <div class="wrap-login100">

                                    <div class="login100-pic js-tilt" data-tilt>
                                        <img src="<?php echo BASE_URL; ?>assets/images/customer-512.png" alt="IMG">
                                           <h3 style="color: #232323">Bem-Vindo Usuario</h3>
                                    </div>

                                <form method="POST" id="novo_user" class="login100-form validate-form">
                                    <span class="login100-form-title film-font">
                                        DADOS DE PERFIL DO USUARIO
                                    </span>
                                

                                    <div class="slideInLeft wrap-input100 animated validate-input">
                                        <input type="text" class="input100" name="nome_txt" required="required" autocomplete="off" placeholder="Nome">
                                        <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                                    </div>

                                    <div class="slideInLeft wrap-input100 animated validate-input">
                                         <input class="email input100" type="email" name="email_txt" required="required" placeholder="email">
                                        <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                                    </div>

                                    <div class="slideInLeft animated wrap-input100 validate-input">
                                        <input class="input100 telefone" type="text" name="telefone_txt" required="required" placeholder="telefone">
                                        <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                                    </div>
                                        <center>
                                    <div class="form-group slideInRight animated">
                                        <label class="" style="color: #232323;">Tipo de pessoa</label> <br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="pessoa" value="fisica" checked="checked" id="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio" style="color: #232323;">Fisica</label>
                                    </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="pessoa" value="juridica" id="customRadio2" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2" style="color: #232323;">Juridica</label>
                                            </div><br>
                                                </div>
                                        </center>

                                        
                                   

                                    <div class="slideInLeft animated wrap-input100 validate-input">
                                        <input class="cpf_cnpj input100" type="text" name="cpf_cnpj_txt" required="required" placeholder="CPF">
                                        <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                                    </div>
                                    

                                    <div class="slideInLeft animated wrap-input100 validate-input">
                                         <input class="senha input100" type="password" name="senha_txt" required="required" placeholder="Senha">
                                         <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                                    </div>
                                    

                                    <div class="slideInLeft animated wrap-input100 validate-input">
                                         <input type="password" class="input100 senha_confirm" name="senha_confirm_txt" placeholder="confirmar senha">
                                         <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                                    </div>
                                    

                                    <div class="container-login100-form-btn">
                                    <input type="submit" name="novo_user" value="Cadastrar" class="login100-form-btn film-font wow slideInRight">
                                </div>
                                </form>
                            </div>
                        
                    </div>
                </center>
                            </div>

                        </div>
                    </div>
                </div>
            

            
                <div class="formularioEmpre" style="color: white">
                    <div class="formularios">
                        
                        
                        <div class="limiter">

                            <center>
                                <div class="wrap-login100">
                                    <div class="login100-pic js-tilt" data-tilt>
                                        <img src="<?php echo BASE_URL; ?>assets/images/Icono Empresario.png" alt="IMG">
                                        <h3 style="color: #232323; ">Bem-Vindo Empresário</h3>
                                    </div>
                        <form method="POST" id="novo_empre" style="" class="login100-form validate-form">


                            <span class="login100-form-title film-font">
                                        DADOS DE PERFIL DO EMPRESÁRIO
                            </span>

                            <div class="slideInLeft wrap-input100 animated validate-input">
                                 <input type="text" name="nome_txt" class="input100" placeholder="nome" required="required">
                                 <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            </div>

                            <div class="slideInLeft wrap-input100 animated validate-input">
                                 <input class="email input100" type="email" placeholder="email" name="email_txt" required="required" >
                                 <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            </div>

                            <div class="slideInLeft wrap-input100 animated validate-input">
                                 <input class="telefone input100" placeholder="telefone" type="text" name="telefone_txt" required="required">
                                 <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            </div>

                    <center>
                            <div class="form-group slideInRight animated">
                                        <label class="" style="color: #232323;">Tipo de pessoa</label> <br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="pessoa" value="fisica" checked="checked" id="customRadio3" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3" style="color: #232323;">Fisica</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="pessoa" value="juridica" id="customRadio4" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4" style="color: #232323;">Juridica</label>
                                    </div>
                                    </div>
                    </center>

                            <div class="slideInLeft wrap-input100 animated validate-input">
                                <input class="cpf_cnpj input100" placeholder="CPF" type="text" name="cpf_cnpj_txt" required="required">
                                <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            </div>

                            <div class="slideInLeft wrap-input100 animated validate-input">
                                 <input type="password" class="input100" placeholder="senha" name="senha_txt" required="required">
                                 <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            </div>

                            <div class="slideInLeft wrap-input100 animated validate-input">
                                 <input type="password" class="input100" placeholder="confirmar senha" name="senha_confirm" required="required">
                                 <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            </div>


                            <hr><span class="login100-form-title film-font">
                                        DADOS DE LOCALIZAÇÃO
                            </span>
                            <div class="slideInLeft wrap-input100 animated validate-input">
                                 <input id="CEP" type="text" name="cep_txt" class="input100" placeholder="CEP">
                                 <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-map" aria-hidden="true"></i>
                            </span>
                                <label style="display: none;" id="erro">ERRO: cep invalido</label>
                            </div>
                            <div id="localiza" style="display: none">
                                <div class="slideInLeft wrap-input100 animated validate-input">
                                    <input id="rua" type="text" name="rua_txt" class="input100" placeholder="rua">
                                    <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-map" aria-hidden="true"></i>
                            </span>
                                </div>

                                <div class="slideInLeft wrap-input100 animated validate-input">
                                     <input id="estado" type="text" name="estado_txt" class="input100" placeholder="estado">
                                     <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-map" aria-hidden="true"></i>
                            </span>
                                </div>

                                <div class="slideInLeft wrap-input100 animated validate-input">
                                 <input id="cid" type="text" name="cid_txt" class="input100" placeholder="cidade">
                                 <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-map" aria-hidden="true"></i>
                            </span>
                                </div>

                                <div class="slideInLeft wrap-input100 animated validate-input">
                                     <input id="num" type="text" name="num_txt" class="input100" placeholder="N°">
                                     <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <input type="submit" name="novo_empre" value="Cadastrar" class="login100-form-btn film-font wow slideInRight">
                                </div>
                            </div>


                        </form>
                    </div>
                </center>
                </div>
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
            <script type="text/javascript" src="<?php echo BASE_URL ?>assets/vendor/tilt/tilt.jquery.min.js"></script>
            <script src="<?php echo BASE_URL; ?>assets/js/main-login.js"></script>	
    </body>
</html>