<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Aqui é a página Login</h1>
	<a href="<?php echo BASE_URL ?>"><button>Página Inicial</button></a>
		<hr>
		<?php 
			if(isset($_SESSION["msg"])){
				echo $_SESSION["msg"];
				unset($_SESSION["msg"]);
			} 
		?>
	<form method="POST" action="<?php echo BASE_URL."login/valida" ?>">
		<input type="text" placeholder="E-Mail..." name="email_txt" required /><br><br>
		<input type="password" placeholder="Senha..." name="senha_txt" required /><br><br>
		<input type="submit" name="enviar_login" value="Logar">
	</form>
</body>
</html>