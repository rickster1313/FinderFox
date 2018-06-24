
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
	

	<div class="container-fluid">
    <div class="row" style="height: 800px;">
    <div class="col-md-6 h-100" style="background-image: url(assets/images/pessoa_feliz.jpg); background-size: cover; background-color: #666;">

    </div>
    <div class="col-md-6 h-100">
    

	<form method="POST" action="<?php echo BASE_URL."login/valida" ?>" style="position: relative; left: 50%; top: 50%; transform: translate(-50%,-50%);"> 
		<h3 class="text-center">Faça Login é gratis</h3><br>
	<div class="input-group mb-3 w-75 mx-auto">
      <div class="input-group-prepend">
        <span class="input-group-text">E-mail</span>
      </div>
		<input autofocus="autofocus" class="form-control" type="text" placeholder="exemplo@email.com..." name="email_txt" required /><br><br>
		</div>
		<div class="input-group mb-3 w-75 mx-auto ">
		<div class="input-group-prepend">
        <span class="input-group-text">Senha</span>
      </div>
		<input class="form-control" type="password" placeholder="************" name="senha_txt" required /><br><br>
		</div>
		<input class="btn btn-outline-dark mx-auto d-block w-25" type="submit" name="enviar_login" value="Logar" style="border-radius: 15px;">
	</form>
        <?php 
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            } 
        ?>
   
	</div>
	</div>
	</div>



	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
	
</body>
</html>