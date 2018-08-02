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
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/default.css" />



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
		<a class="btn btn-outline-light film-font botao-voltar" style="" href="<?php echo BASE_URL; ?>">Voltar ao Menu</a>
		<div class="main">

			<div class="esquerda grid cs-style-1">
				
				<figure>
						<img src="assets/images/1.png" alt="img01">
						<figcaption>
							<h3>Camera</h3>
							<span>Jacob Cummings</span>
							<button class="btn btn-outline-light qe">Cadastrar-se</button>
						</figcaption>
					</figure>
			
			
			</div>
			<div class="direita grid cs-style-1">
				<figure>
						<img src="assets/images/1.png" alt="img01">
						<figcaption>
							<h3>Camera</h3>
							<span>Jacob Cummings</span>
							<button class="btn btn-outline-light qd">Cadastrar-se</button>
						</figcaption>
					</figure>
			</div>
		</div>

		<div class="container" style="background-image: url(assets/images/fundo.jpg); background-size: cover;">
		<div class="formularioUser" style="color: white">
			<div class="formularios">
				<h1 class="film-font">Dados de perfil do usuário</h1><hr>
				<h3></h3>

				<form method="POST" id="novo_user">
					<div class="form-group">
					<label class="film-font" style="font-size: 20px;">Nome</label> <input type="text" class="form-control" name="nome_txt" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">E-mail</label> <input class="email form-control" type="email" name="email_txt" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">Telefone</label> <input class="telefone form-control" type="text" name="telefone_txt" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">Tipo de pessoa</label> <br>
					<input type="radio" name="pessoa" value="fisica" checked="checked">Física 
					<input type="radio" name="pessoa" value="juridica">Jurídica<br>
				</div>

				<div class="form-group">
					<input class="cpf_cnpj form-control" type="text" name="cpf-cnpj_txt" required="required" placeholder="CPF..." style="background:transparent; border-radius: 15px;"><br><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">Senha</label> <input class="senha form-control" type="password" name="senha_txt" required="required" style="background:transparent; border-radius: 15px;"> <br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">Confirmar senha</label> <input type="password" class="form-control senha_confirm" name="senha_confirm_txt" required="required" style="background:transparent; border-radius: 15px;"> <br>
				</div>


					<input type="submit" name="novo_user" value="Cadastrar" class="btn btn-outline-light film-font">
				</form>
			</div>
			
		</div>
	</div>

	<div class="container">
		<div class="formularioEmpre" style="color: white">
			<div class="formularios">
				<hr><h1>Dados de perfil do Empresário</h1><br><br>

				<form method="POST" id="novo_empre">
                    <div class="form-group">
					<label class="film-font" style="font-size: 20px;">Nome</label> <input type="text" name="nome_txt" class="form-control" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">e-mail</label> <input class="email form-control" type="e-mail" name="email_txt" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">telefone</label> <input class="telefone form-control" type="text" name="telefone_txt" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">Tipo de pessoa</label> - 
					<input type="radio" name="pessoa" value="fisica" checked="checked" class="film-font" style="font-size: 18px;">Física 
					<input type="radio" name="pessoa" value="juridica" class="film-font" style="font-size: 18px;">Jurídica<br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">CPF</label><input class="cpf_cnpj form-control" type="text" name="cpf_cnpj_txt" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">senha</label> <input type="password" class="form-control" name="senha_txt" required="required" style="background:transparent; border-radius: 15px;"><br>
				</div>

				<div class="form-group">
					<label class="film-font" style="font-size: 20px;">Confirmar senha</label> <input type="password" class="form-control" name="senha_confirm" required="required" style="background:transparent; border-radius: 15px;"> <br>
				</div>


					<hr><h1 style="margin-left: -130px">Dados de localização</h1><br><br>
                    <div class="form-group">
					<label class="film-font" style="font-size: 20px;">CEP</label> <input id="CEP" type="text" name="cep_txt" class="form-control" style="background:transparent; border-radius: 15px;">
					<label style="display: none;" id="erro">ERRO: cep invalido</label>
				</div>
					<button id="ok_cep" class="btn btn-outline-light">Confirmar</button><br>
					<div id="localiza" style="display: none">
						<div class="form-group">
						<label class="film-font" style="font-size: 20px;">Rua</label> <input id="rua" type="text" disabled="disabled" name="rua_txt" class="form-control" style="background:transparent; border-radius: 15px;"><br>
					</div>

					<div class="form-group">
						<label class="film-font" style="font-size: 20px;">Estado</label> <input id="estado" type="text" disabled="disabled" name="estado_txt" class="form-control" style="background:transparent; border-radius: 15px;"><br>
					</div>

					<div class="form-group">
						<label class="film-font" style="font-size: 20px;">Cidade</label> <input id="cid" type="text" disabled="disabled" name="cid_txt" class="form-control" style="background:transparent; border-radius: 15px;"><br>
					</div>

					<div class="form-group">
						<label class="film-font" style="font-size: 20px;">Nº</label> <input id="num" type="text" name="num_txt" class="form-control" style="background:transparent; border-radius: 15px;"><br>
					</div>

						<input type="submit" name="novo_empre" value="Cadastrar" class="btn btn-outline-light">
					</div>
					

				</form>
			</div>
		</div>
	</div>


	</div>

	
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/toucheffects.js"></script>
        	
</body>
</html>