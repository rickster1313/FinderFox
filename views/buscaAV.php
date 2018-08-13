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
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

   


    
    <style type="text/css">
    .container-fluid{
        padding: 0px;
    }
    .nav{
        margin-right: 100px;
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
        background-color: #dfcdef;
        font-family: 'Bree Serif', serif;
    }


    @font-face {

      font-family: "BPreplayBold";
      src: url("assets/fonts/BPreplayBold.otf") format("opentype");

      }


.replay-font{
    font-family: "BPreplayBold";
      
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
        height: 60px;
        font-size: 25px;
        background-color: transparent;
        border:#232323 2px solid;
        border-radius: 7px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        outline: none;
        padding-left: 10px;

        
    }
    .form form input[type=submit]{
        width: 120px;
        height: 60px;
        font-size: 25px;
        background-color: #232323    ;
        border:#232323 2px solid;
        border-radius: 7px;
        outline: none;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        color: #ffffff;
        margin-left: -7px;
        margin-top: 2px;

    }
        .ladoBaixo{
            width: 100%;
            overflow: hidden;
        }
        .lados{
            width: 20%;  
            background-color: rgba(104,49,155,0.2);
            float: left;
            min-height: 900px;
        }
        .centro{
            width: 60%; 
            background-color: linear-gradient(45deg,  #361850, #68319B);
            float: left;
            min-height: 900px;
            overflow: hidden;
            
        }

    </style>

</head> 
<body>



    <div class="container-fluid" style="padding: 0px">
        <header class="header" style="background: linear-gradient(45deg,  #361850, #68319B);">
            <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/logo-falso.png">
            <p class="replay-font" style="color: #ffffff">FinderFox</p>
            <ul class="nav navbar-expand" >
                    <div class="botão" style="margin-top: 20%;">

                    <?php if (isset($_SESSION['id'])){ ?>
                        <a href="<?php echo BASE_URL; ?>empresario">
                            <img src="<?php echo BASE_URL; ?>assets/images/carinha.png" style="width: 51px;" >
                        </a>
                        <a  href="<?php echo BASE_URL ?>login/deslogar">
                            <img src="<?php echo BASE_URL; ?>assets/images/entrar.png" style="width: 35px; margin-top: 5px; 
                            margin-right: 9px;">
                        </a>
                    <?php }else{ ?>
                    <a class="btn btn-outline-light film-font" style="border-radius: 15px; border: 2px solid; font-size: 18px;" href="<?php echo BASE_URL; ?>login">LOGIN </a>
                    <a class="btn btn-outline-light film-font" style="border-radius: 15px; border: 2px solid; font-size: 18px;" href="<?php echo BASE_URL; ?>cadastro">CADASTRE-SE JÁ</a>
                    <?php } ?>
                    
                    
                    
                    </div>
                
            </ul>

        </header> 
        <div class="ladoBaixo" style="">
            <div class="lados" style=""></div>
            <div class="centro" style="">
                <div class="form" style="overflow: hidden;">
                    <div class="form-group">
                        <form >
                            <input type="text" name="cep_txt" autocomplete="off" placeholder="Pesquisar..." class="film-font" style="font-size: 22px; border: 2px solid;">
                            <input type="submit" name="enviar_cep" value="BUSCAR" class="film-font" style="font-size: 23px; background-color: #361850;" >
                        </form>
                    </div>
               
                    
                    
                </div>
                 <button class="btn btn-outline-light btn-lg" data-toggle="collapse" data-target="#demo"
                  style="float: right; margin-right: 95px;">Filtro</button>

                <div class="alert alert-success alert-dismissible" style="width: 30%;margin-left: 50px; ">
                        <button type="button" class="close" id="cancela_cep" data-dismiss="alert">&times;</button>
                        <strong>Seu cep:</strong> <?php echo $cep_ativo; ?>
                </div>
                    <div id="demo" class="collapse">
                          <form>
                            <select name="cars" class="custom-select custom-select mb-3" style="width: 249px;">
                              <option selected>Selecione uma categoria</option>
                              <option value="volvo">1/10</option>
                              <option value="fiat">3/10</option>
                              <option value="audi">6/10</option> 
                              <option value="volvo">8/10</option>
                              <option value="fiat">9/10</option>
                              <option value="audi">10/10</option> 
                              
                            </select>
                          </form>
                  </div>
                <hr>
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