
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">


<style type="text/css">
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
	

	<div class="container-fluid" style="position: absolute;height: 100%">
    <div class="row" style="height: 100%;">
    <div class="col-md-6 h-100" style="background-image: url(assets/images/pessoa_feliz.jpg); background-size: cover; background-color: #666;">
    	<a href="<?php echo BASE_URL; ?>"><button class="btn btn-outline-dark" style="margin-top: 15px">Pagina Inicial</button></a>
    </div>

    <div class="col-md-6 h-100" style="background: rgba(221, 179, 179, 0.2);">

	<form method="POST" action="<?php echo BASE_URL."login/valida" ?>" style="position: relative; left: 50%; top: 50%; transform: translate(-50%,-50%);"> 
	 <?php 
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            } 
        ?>
		<h3 class="text-center film-font" style="font-size: 32px;">Faça Login, é gratis!</h3><br>
		<center>
		<label class="film-font" style="font-size: 18px;">E-Mail:</label>
		</center>

	<div class="input-group mb-3 w-75 mx-auto">
		<input style="border-radius: 15px; border: 2px solid #ddb3b3;background: #f2f2f3; box-shadow: 0 0 0 0" autofocus="autofocus" class="form-control" type="text" placeholder="exemplo@email.com..." name="email_txt" required /><br><br>
		</div>
		<center>
        <label class="film-font" style="font-size: 18px;">Senha:</label>
        </center>
		<div class="input-group mb-3 w-75 mx-auto ">
		<input style="border-radius: 15px; border: 2px solid #ddb3b3;background: #f2f2f3; box-shadow: 0 0 0 0" class="form-control" type="password" placeholder="************" name="senha_txt" required /><br><br>
		</div>

		<input class="btn btn-outline-dark mx-auto d-block w-25 film-font" type="submit" name="enviar_login" value="LOGAR" style="border-radius: 15px; font-size: 18px;">
	</form>
        
   
	</div>
	</div>
	</div>



	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
	
</body>
</html>