
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
	</head>

<body>
	<h1>Aqui é a página Login</h1>
	<a href="<?php echo BASE_URL ?>"><button class="btn btn-outline-dark">Página Inicial</button></a>
		<hr>
		<?php 
			if(isset($_SESSION["msg"])){
				echo $_SESSION["msg"];
				unset($_SESSION["msg"]);
			} 
		?>

	<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6" style="background-color:#17a2b8;">
    IMAGEM
    </div>
    <div class="col-sm-6">
    <center>
	<form method="POST" action="<?php echo BASE_URL."login/valida" ?>" class="justify-content-center"> 
	<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">E-mail</span>
      </div>
		<input  class="form-control" type="text" placeholder="E-Mail..." name="email_txt" required /><br><br>
		</div>
		<div class="input-group mb-3" style="width: 50%;">
		<div class="input-group-prepend">
        <span class="input-group-text">Senha</span>
      </div>
		<input class="form-control" type="password" placeholder="Senha..." name="senha_txt" required /><br><br>
		</div>
		<input class="btn btn-outline-dark" type="submit" name="enviar_login" value="Logar">
	</form>
	</center>
	</div>
	</div>
	</div>



	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
	
</body>
</html>