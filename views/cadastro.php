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
		border: #fff solid 2px;
	}
	.qua-di{
		background-color: white;
		border: #fff solid 2px;
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
	.formularios form{
		padding-left: 130px;
	}

</style>
</head>
<body>
	


	<div class="container-fluid">
		<a class="btn btn-outline-light film-font botao-voltar" style="" href="<?php echo BASE_URL; ?>">Voltar ao Menu</a>
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
			<div class="formularios">
				<h1>Dados de perfil do usuário</h1><hr>
				<h3></h3>
				<form>
					<label>Nome</label> <input type="text" name=""><br>
					<label>e-mail</label> <input type="e-mail" name=""><br>
					<label>telefone</label> <input type="text" name=""><br>
					<label>CPf / CNPJ</label> <input type="text" name=""><br>
					<label>senha</label> <input type="password" name=""><br>
					<input type="submit" name="" value="Cadastrar">
				</form>
			</div>
			
		</div>
		<div class="formularioEmpre" style="color: white">
			<div class="formularios">
				<hr><h1>Dados de perfil do Empresário</h1><br><br>
			
				<form>

					<label>Nome</label> <input type="text" name=""><br>
					<label>e-mail</label> <input type="e-mail" name=""><br>
					<label>telefone</label> <input type="text" name=""><br>
					<label>CPf / CNPJ</label> <input type="text" name=""><br>
					<label>senha</label> <input type="password" name=""><br>

					<hr><h1 style="margin-left: -130px">Dados de localização</h1><br><br>

					<label>CEP</label> <input type="text" name="">
					<button id="ok_cep">Confirmar</button><br>
					<div id="localiza" style="display: none">
						<label>Rua</label> <input type="text" disabled="disabled" name=""><br>
						<label>Estado</label> <input type="text" disabled="disabled" name=""><br>
						<label>Cidade</label> <input type="text" disabled="disabled" name=""><br>
						<label>Nº</label> <input type="text" name=""><br>
						<input type="submit" name="" value="Cadastrar">
					</div>
					

				</form>
			</div>
		</div>


	</div>

	
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
</body>
</html>