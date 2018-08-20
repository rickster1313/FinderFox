
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title >FinderFox</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style_circ.css">
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>

	<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->


<style type="text/css">


    .container-fluid{
        padding: 0px;
    }

    .header{
        width: 100%;
        background-color: #361850; 
        overflow: hidden;
    }
    .nav{
        margin-right: 10px;
        float: right;
    }
    .nav li a{
        color: #ffffff;
    }
   
    .header img{
        float: left;
        margin-left: 50px;
    }
    .header p{
        font-size: 50px;
        float: left;
        margin-top: 30px;
        margin-left: 10px;
        color:#68319B;
    }
    .main{
        height: 750px;
        width: 100%;
        background-color: rgba(104,49,155,0.2);
        text-align: center;
    }

     .dados{
        height: 650px;
        width: 100%;
        background: linear-gradient(45deg,  #361850, #68319B);
        text-align: center;
    }
    .form{
        padding-top: 100px;

    }

    .form form input[type=text]{
        width: 50%;
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
        height: 60px;
        width: 120px;
        font-size: 25px;
        background-color: #232323    ;
        border:#232323 2px solid;
        border-radius: 7px;
        outline: none;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        margin-left: -7px;
        color: #ffffff;

    }

    ::-webkit-input-placeholder {
       color: rgba(0,0,0,0.5);
       font-size: 20px;
    }

    :-moz-placeholder { /* Firefox 18- */
       color: rgba(0,0,0,0.5);
       font-size: 20px; 
    }

    ::-moz-placeholder {  /* Firefox 19+ */
       color: rgba(0,0,0,0.5);
       font-size: 20px; 
    }

    :-ms-input-placeholder {  
       color: rgba(0,0,0,0.5);
       font-size: 20px;
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


</style>

</head>
	
<body>
    <!--  
    #68319B rgba(104,49,155,1) roxo claro
    #361850 rgba(54,24,80,1) roxo escuro
    #ffffff rgba(255,255,255,1) branco
    #232323 rgba(35,35,35,1) cinza pah 
    -->
		
    <div class="container-fluid">
        <header class="header" style="background: linear-gradient(45deg,  #361850, #68319B);">
            
            <p class="replay-font" style="color: #ffffff; text-shadow: 2px 8px 11px #232323;">FinderFox</p>
            <ul class="nav navbar-expand" >
                <div class="botão" style="margin-top: 20px;margin-right: 20px">
                    <?php if (isset($_SESSION['id'])){ ?>
                    <a href="<?php echo BASE_URL ?>login/deslogar" style= "float: right;margin: 0px;text-align: center;width: 50px;margin-left: 30px;text-decoration: none;color: white">
                        <img src="<?php echo BASE_URL; ?>assets/images/entrar.png" style="width: 50px;margin: 0px">
                        Deslogar
                    </a>
                    <?php }else{ ?>
                    <a class="btn btn-outline-light film-font" style="border-radius: 15px; border: 2px solid; font-size: 18px; 
                    box-shadow: 3px 3px 5px #232323;" href="<?php echo BASE_URL; ?>cadastro">CADASTRE-SE JÁ</a>
                    <?php } ?>
                    
                    

                    <?php if (isset($_SESSION['id'])){ ?>
                    <a href="<?php echo BASE_URL; ?>login" style= "float: right;text-align: center;width:50px;text-decoration: none;color: white">
                        <img src="<?php echo BASE_URL; ?>assets/images/carinha.png" style="width: 50px; margin: 0px;" >
                        Painel 
                    </a>
                    <?php }else{ ?>
                    <a class="btn btn-outline-light film-font" style="border-radius: 15px; border: 2px solid; font-size: 18px; 
                    box-shadow: 3px 3px 5px #232323;" href="<?php echo BASE_URL; ?>login">LOGIN 
                    <?php } ?></a>
                    
                </div>
                
            </ul>

        </header>

        <div class="main" style="background: linear-gradient(45deg, #A491BA, #CFC1DE)">
                
            <div class="form">
                <?php 
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
                <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/finderlogopng.png" width="300">
                <div class="informação">

                   <p class="replay-font" style="font-size: 25px;">Informe-nos seu cep <br></p>
               </div>
                <form id="form_buscar_cep">
      <div class="form-group">
                    <input type="text" name="cep_txt" id="cep_busca" autocomplete="off" placeholder="Digite seu CEP" class="film-font" style="font-size: 22px; border: 2px solid;">
                    <input type="submit" name="enviar_cep" value="BUSCAR" class="film-font" style="font-size: 23px; background-color: #361850;" >
                    </div>
                    <p class="replay-font" style="font-size: 20px;"> encontraremos os servicos disponiveis para sua localizacao</p>
 
                </form>
            </div>

        </div>

        

    </div>
	



	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.79639.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/home.js"></script>
	<!--<script type="text/javascript" charset="utf8" src="htpps://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
	
</body>
</html>

