<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<h1>Aqui é a página de cadastro</h1>
	<a href="<?php echo BASE_URL; ?>"><button>Página Inicial</button></a>
	<hr>
	<?php 
		if(isset($_SESSION["msg"])){
			echo $_SESSION["msg"];
			unset($_SESSION["msg"]);
		} 
	?>
	<form method="POST" id="form_cadastro" >
		<label>Nome</label><br>
		<input type="text" name="nome_txt" required="required" /><br><br>

		<label>Data de Nascimento</label><br>
		<input type="date" name="data_txt" required="required"><br><br>
		
		<label>E-mail</label><br>
		<input id="email" type="email_txt" name="email_txt" required="required"><div id="resp_email"></div><br><br>
		

		<label>Senha</label><br>
		<input id="senha" type="password" name="senha_txt" required="required"><em>recomendado no mínimo 8 caracteres, o uso de letras minúsculas/maiúsculas e numeros</em>
		<div id="forca"></div>
		<br><br>

		<label>Endereço</label><br>
		<input type="text" name="endereco_txt" required="required" /><br><br>

		<label>Telefone</label><br>
		<input id="telefone" type="text" name="telefone_txt" required="required" /><br><br>

		<label>Sexo</label><br>
		<input type="radio" name="sexo_txt" value="Masculino" checked="checked" />Masculino<br>
		<input type="radio" name="sexo_txt" value="Feminino"/>Feminino<br>
		<input type="radio" name="sexo_txt" value="Outro"/>Outro<br><br>

		<label>Tipo de Pessoa</label><br>
		<input type="radio" name="pessoa_txt" checked="checked" value="fisica"/>Física
		<input type="radio" name="pessoa_txt" value="juridica"/>Jurídica<br><br>
		<div id="div_cpf">
			<label id="labelPessoa">CPF</label><br>
			<input id="cpf_cnpj" type="text" name="CPF_CNPJ_txt" required="required" />
		</div>
		<div id="resp_pessoa"></div>

		<input type="submit" name="enviar_cad"><br><br>
	</form>
	
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
</body>
</html>