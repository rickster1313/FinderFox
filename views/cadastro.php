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
		border: #232323 solid 2px;
	}
	.qua-di{
		background-color: white;
		border: #232323 solid 2px;
	}

	.formularioUser{
		display: none;
		background-color: rgba(54,24,80,1);
	}

	.formularioEmpre{
		display: none;
		background-color: rgba(35,35,35,1);
	}
	.esquerda{
		background-color: rgba(54,24,80,1);
		position: absolute;
		left: 0px;
		width: 50%;
		height: 100%;
		display: flex;
  		align-items: center;
 		justify-content: center;
	}

	.direita{
		background-color: rgba(35,35,35,1);
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
		}
		.qua-di{
			width: 360px;
			height: 360px;
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
	

</style>
</head>
<body>
	


	<div class="container-fluid">

		<div class="main">
			<div class="esquerda">
				<div class="qua-es">
					//aqui vai ser uma imagem com o texto:<br>
					<h1>Cadastrar como novo usuário do FinderFox</h1>
					<h5>Benefícios: usar funções dos ambientes e muito mais!</h5>
				</div>
			</div>
			<div class="direita">
				<div class="qua-di">
					//aqui vai ser uma imagem com o texto:<br>
					<h1>Cadastrar como novo /gestor/</h1>
					<h5>Benefícios: criar seu próprio ambiente, liberar suas funções dentre outros!!</h5>
				</div>
			</div>
		</div>
		<div class="formularioUser" style="color: white">
			<h1>Formulario de usuario</h1>
		</div>
		<div class="formularioEmpre" style="color: white">
			<h1>Formulario de Empresarios</h1>
		</div>


	</div>

	
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
</body>
</html>