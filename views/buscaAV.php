<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Busca</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/w3.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/set2.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/set1.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component1.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/estilo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style2.css">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>





        <style type="text/css">
            .container-fluid{
                padding: 0px;
            }
            .nav{
                margin-right: 10px;
                float: right;
            }
            .nav li a{
                color: #ffffff;
            }

            .header{
                width: 100%;
                background-color: #361850; 
                overflow: hidden;
            }
            .header p{
                font-size: 50px;
                float: left;
                margin-top: 30px;
                margin-left: 10px;
                color:#68319B;
            }
            .header img{
                float: left;
                margin-left: 50px;
            }

            body{
                background-color: white;/*#dfcdef;*/
                font-family: 'Bree Serif', serif;
            }


            @font-face {

                font-family: "BPreplayBold";
                src: url("assets/fonts/BPreplayBold.otf") format("opentype");

            }


            .replay-font{
                font-family: "BPreplayBold";
                font-size: 16px;
            }

            @font-face {

                font-family: "Champagne & Limousines Bold";
                src: url("assets/fonts/Champagne & Limousines Bold.ttf") format("truetype");

            }

            .film-font{
                font-family: "Champagne & Limousines Bold";
                font-size: 25px;  
            }  

            @font-face {

                font-family: "Typo Hoop";
                src: url("assets/fonts/Typo Hoop_Light Demo.otf") format("opentype");

            }

            .topfont{
                font-family: "Typo Hoop";
                font-size: 16px;  
            }  
            .form{
                padding-top: 80px;
                left: 6%;
                transform: translate(6%);


            }

            .form form input[type=text]{
                width: 70%;
                height: 40px;
                font-size: 18px;
                background-color: transparent;
                border:none;
                box-shadow: -10px 2px 1px 0px rgba(54,24,80,0.37);
                color: rgba(35,35,35,0.7);
                outline: none;
                padding-left: 10px;


            }
            .form form input[type=submit]{
                width: 100px;
                height: 40px;
                font-size: 13px;



            }
            .ladoBaixo{
                width: 100%;
                overflow: hidden;
            }
            .lados{
                width: 15%;  

                float: left;
                min-height: 900px;
            }
            .centro{
                width: 70%; 
                background-color:#FFFFFF; 
                /*background-color: white; linear-gradient(45deg,  #361850, #68319B);*/
                float: left;
                min-height: 900px;
                overflow: hidden;


            }
            .content_avs{
                background-color: blue;
                height: auto; 
            }
            .av_iten{
                float: left;
                width: 50%;
                height: 180px;
                text-align: center;
                padding-left:10px; 
                padding-right:10px;
                align-items: center;

            }


            .av_block{
                background-color: #8B57A7; 
                height: 120px;
                width: 100%;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 2px 2px 4px #232323;

            }

            .av_block :hover{
                color: #ffffff;
            }


            .av_info{
                float: left;
                margin-left: 10px;
                text-align: left;
            }



        </style>

    </head> 
    <body>



        <div class="container-fluid" style="padding: 0px">
            <header class="header" style="background: linear-gradient(45deg,  #361850, #68319B);">

                <p class="replay-font" style="color: #ffffff; text-shadow: 2px 8px 11px #232323;">FinderFox</p>
                <ul class="nav navbar-expand" >
                    <div class="botão" style="margin-top: 20px;margin-right: 20px">
                        <?php if (isset($_SESSION['id'])) { ?>
                            <a href="<?php echo BASE_URL ?>login/deslogar" style= "float: right;margin: 0px;text-align: center;width: 50px;margin-left: 30px;text-decoration: none;color: white">
                                <img src="<?php echo BASE_URL; ?>assets/images/entrar.png" style="width: 50px;margin: 0px">
                                Deslogar
                            </a>
                        <?php } else { ?>
                            <a class="btn btn-outline-light film-font" style="border-radius: 15px; border: 2px solid; font-size: 18px; 
                               box-shadow: 3px 3px 5px #232323;" href="<?php echo BASE_URL; ?>cadastro">CADASTRE-SE JÁ</a>
                           <?php } ?>



                        <?php if (isset($_SESSION['id'])) { ?>
                            <a href="<?php echo BASE_URL; ?>login" style= "float: right;text-align: center;width:50px;text-decoration: none;color: white">
                                <img src="<?php echo BASE_URL; ?>assets/images/carinha.png" style="width: 50px; margin: 0px;" >
                                Painel 
                            </a>
                        <?php } else { ?>
                            <a class="btn btn-outline-light film-font" style="border-radius: 15px; border: 2px solid; font-size: 18px; 
                               box-shadow: 3px 3px 5px #232323;" href="<?php echo BASE_URL; ?>login">LOGIN 
                            <?php } ?></a>

                    </div>

                </ul>

            </header>
            <div class="ladoBaixo" >
                <div class="lados" ></div>
                <div class="centro" >
                    <div class="form" style="overflow: hidden;">
                        <div class="form-group">
                            <form >
                                <input type="text" name="cep_txt" autocomplete="off" placeholder="Buscar serviços..." class="film-font" >
                                <button type="submit" name="enviar_cep" value="BUSCAR" class="btn-ef btn-5 btn-5b icon-cart"> <span>Buscar</span></button>
                            </form>
                        </div>
                        <br></div>
                    <hr style="border-color: #232323;">



                    <button class="btn btn-outline-dark btn-lg" data-toggle="collapse" data-target="#demo"
                            style="float: right; margin-right: 95px;font-size: 14px">Filtro</button>

                    <div class="alert alert-success alert-dismissible" style="width: 30%;margin-left: 50px;font-size: 14px; ">
                        <button type="button" class="close" id="cancela_cep" data-dismiss="alert">&times;</button>
                        <strong>Seu cep:</strong> <?php echo $cep_ativo; ?>
                    </div>
                    <div id="demo" class="collapse" style="padding-bottom: 0px;">
                        <form style="padding-left: 20px">
                            <label>Categoria</label><br>
                            <select name="cars" class="custom-select custom-select mb-3" style="width: 249px;">
                                <option selected>Todos</option>
                                <option value="volvo">1/10</option>
                                <option value="fiat">3/10</option>
                                <option value="audi">6/10</option> 
                                <option value="volvo">8/10</option>
                                <option value="fiat">9/10</option>
                                <option value="audi">10/10</option>  
                            </select>
                        </form>
                    </div>    
                    <hr style="margin-top: 0px;border-color: #232323">


                    <div class="content_avs">
                        <?php
                        //print_r($dataAV);
                        foreach ($dataAV as $key => $value) {
                            ?>

                            <div class="av_iten">
                                <a href="<?php echo BASE_URL . $value[0]['url']; ?>">
                                    <div class="av_block">
                                        <img src="<?php echo BASE_URL; ?>assets/images/AV/<?php echo $value[0]['img']; ?>" style="height: 100px; float: left;">
                                        <div class="av_info">
                                            <strong><span style="font-size: 18px "><?php echo $value[0]['nome_av']; ?></span></strong><br>
                                            <p style="margin:0px;opacity: 0.7"><span>Distância:</span> <?php echo $value['distancia']; ?>  KM (aprox.)</p>
                                            <p style="margin:0px;opacity: 0.7"><span>Categoria: </span><?php echo $value[0]['categoria']; ?></p>
                                            <p style="margin:0px;opacity: 0.7"><span>Cidade: </span><?php echo $value['cidade'] . " - " . $value['estado']; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>  
                    </div>





                </div>

                <div class="lados" style=""></div>
            </div>   
        </div>




        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/buscaAV.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/classie.js"></script>



    </body>
</html>