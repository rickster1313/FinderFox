<!DOCTYPE html>
<html>
<head>
	<title>Página ADM</title>
	<meta charset="utf-8">
	<style type="text/css">

		body{
			padding: 0px;
			margin: 0px;
		}
		#container{
			
		}
		#btn_sair{
			position: absolute;
			right: 20px;
			top: 20px;
			width: 100px;
			height: 20px;
			border: black solid 1px;
			border-radius: 5px;
			background:white;
			color: rgba(30,30,146,1);
		}
		#btn_sair:hover{
			background:black;
			color: white;
		}
		#header{
			z-index: 5;
			padding-left: 10px;
			position: absolute;
			top: 0px;
			width: 100%; 
			height: 150px;
			background-color: rgba(30,30,146,1);
			border-bottom: black solid 1px;
		}
		#menu{
			z-index: 4;
			padding-left: 10px;
			position: absolute;
			width: 200px;
			height: 100%;
			background-color: green;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id="header">

		<h1>Olá <?php $newNome = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>
		<a href="<?php echo BASE_URL ?>login/deslogar"><button id="btn_sair">SAIR</button></a>
		
		</div>
		<div id="menu">
			casd
		</div>

	</div>	
	
</body>
</html>