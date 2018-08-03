
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
</style>

	</head>

<body>
	

	
	

	<div class="container-fluid">
	<div class="row">

		<div class="col-sm-6" style="width: 100%; height: 950px;background: linear-gradient(45deg, #A491BA, #CFC1DE)">
		<div style="display:block; width:50%;left: 40%; top: 200px; transform: translate(40%, 200px);">
		<?php 
    
	if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
	}

	?>

	</div>
	<form method="POST" action="<?php echo BASE_URL ?>login/valida" name="login" style=" transform: translate(20%, 100%);">
		<div class="form-group w-50">
		<label class="film-font" style="font-size: 20px;">Email:</label>
		<input type="text" class="form-control" name="email_txt" style="border-radius: 15px; border: 2px solid #000">
	</div>

	<div class="form-group w-50">
		<label class="film-font">Senha:</label>
		<input type="password" class="form-control" name="senha_txt" style="border-radius: 15px; border: 2px solid #000">
	</div>

		<input type="submit" name="enviar_login" class="btn btn-outline-dark">
	</form>
</div>

<div class="col-sm-6" style="height: 950px; background: url(assets/images/fundo3.jpg);">
	</div>

</div>
</div>

    



	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
	
</body>
</html>