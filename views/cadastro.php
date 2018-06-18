<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
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
	<h1>Aqui é a página de cadastro</h1>
	<a href="<?php echo BASE_URL; ?>"><button class="btn btn-outline-dark">Página Inicial</button></a>
	<hr>
	<?php 
		if(isset($_SESSION["msg"])){
			echo $_SESSION["msg"];
			unset($_SESSION["msg"]);
		} 
	?>
	<form method="POST" id="form_cadastro" >
		<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">Nome</span>
      </div>
		<input class="form-control" type="text" name="nome_txt" required="required" /><br><br>
        </div>

		<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">Data</span>
      </div>
		<input class="form-control" type="date" name="data_txt" required="required"><br><br>
		</div>


		<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">E-mail</span>
      </div>
		<input class="form-control" id="email" type="email_txt" name="email_txt" required="required"><div id="resp_email"></div><br><br>
		</div>

		<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">Senha</span>
      </div>
		<input class="form-control" id="senha" type="password" name="senha_txt" required="required"><em>recomendado no mínimo 8 caracteres, o uso de letras minúsculas/maiúsculas e numeros</em>
		<div id="forca"></div>
	</div>

		<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">Endereço</span>
      </div>
		<input class="form-control" type="text" name="endereco_txt" required="required" /><br><br>
</div>


		<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">Telefone</span>
      </div>
		<input class="form-control" id="telefone" type="text" name="telefone_txt" required="required" /><br><br>
         </div>

        <label>Sexo</label><br>
        <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customRadio" name="sexo_text" checked="checked">
    <label class="custom-control-label" for="customRadio">Masculino</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customRadio2" name="sexo_text">
    <label class="custom-control-label" for="customRadio2">Feminino</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customRadio3" name="sexo_text">
    <label class="custom-control-label" for="customRadio3">Outros</label>
  </div> 

<br>
    <label>Tipo de Pessoa</label><br>
        <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio4" name="pessoa_text" checked="checked">
    <label class="custom-control-label" for="customRadio4">Fisica</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio5" name="pessoa_text">
    <label class="custom-control-label" for="customRadio5">Juridica</label>
  </div> 
  <br><br>

		
		<div class="input-group mb-3" style="width: 50%;">
      <div class="input-group-prepend">
        <span class="input-group-text">CPF</span>
      </div>
		<div id="div_cpf">
			<input class ="form-control" id="cpf_cnpj" type="text" name="CPF_CNPJ_txt" required="required" />
		</div>
	</div>
		<div id="resp_pessoa"></div>

		<input class="btn btn-outline-dark" type="submit" name="enviar_cad" value="ENVIAR" /><br><br>
	</form>
	
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
</body>
</html>