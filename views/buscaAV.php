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

            input[type=text]{
                width: 400px;
                margin-top: 60px;


            }

            .ladoBaixo{
                width: 100%;
                overflow: hidden;
            }
            /* Pagination links */
            .pagination a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;
            }

            /* Style the active/current link */
            .pagination a.active {
                background-color: #361850;
                color: white;
            }

            .pagination a:hover.active {
                background-color: #361850;
                color: white;
            }

            /* Add a grey background color on mouse-over */
            .pagination a:hover:not(.active) {background-color: #ddd;}
            #all_avs{
                width: 600px;
                margin-top: 30px;
                left: 50%;
                position: absolute;
                transform: translateX(-50%);

            }
            .pagination{
                margin-top: 20px;
                left: 50%;
                position: absolute;
                transform: translateX(-50%);
            }
            a:link 
            { 
                text-decoration:none; 
            } 
            .pagination:hover{
                cursor:default;
            }

           
        </style>

    </head> 
    <body>



        <div class="container-fluid" style="padding: 0px">
            <header class="header" style="background: linear-gradient(45deg,  #361850, #68319B);">

                <p class="" style="color: #ffffff; text-shadow: 2px 8px 11px #232323; margin-left: 5%;">FinderFox</p>
                <div class="nav navbar-expand" >
                    <div class="botão" style="margin-top: 20px;margin-right: 20px;">
                        <?php if (isset($_SESSION['id'])) { ?>
                            <a href="<?php echo BASE_URL ?>login/deslogar" style= "float: right;margin: 0px;text-align: center;width: 50px;margin-left: 30px;text-decoration: none;color: white">
                                <img src="<?php echo BASE_URL; ?>assets/images/entrar.png" style="width: 45px;margin-left: 15px;">
                                Deslogar
                            </a>
                        <?php } else { ?>
                            <a class="btn btn-outline-light" style="border-radius: 15px; border: 2px solid; font-size: 18px; 
                               box-shadow: 3px 3px 5px #232323;" href="<?php echo BASE_URL; ?>cadastro">CADASTRE-SE JÁ</a>
                           <?php } ?>



                        <?php if (isset($_SESSION['id'])) { ?>
                            <a href="<?php echo BASE_URL; ?>login" style= "float: right;text-align: center;width:50px;text-decoration: none;color: white">
                                <img src="<?php echo BASE_URL; ?>assets/images/carinha.png" style="width: 50px; margin: 0px;" >
                                Painel 
                            </a>
                        <?php } else { ?>
                            <a class="btn btn-outline-light" style="border-radius: 15px; border: 2px solid; font-size: 18px; 
                               box-shadow: 3px 3px 5px #232323;" href="<?php echo BASE_URL; ?>login">LOGIN 
                            <?php } ?></a>

                    </div>

                </div>

            </header>
            <div class="ladoBaixo" >
                <center>
                    <input type="text" id="serchAV" placeholder="Pesquisar AVs...">
                </center>
                <div id="all_avs">
                    <ul  class="list-group">

                    </ul>
                    <div class="pagination">
                        <a id="prevPag">&laquo;</a>
                        <div id="paginat">

                        </div>
                        <a id="nextPag">&raquo;</a>
                    </div>
                </div>

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