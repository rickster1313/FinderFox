<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página EMPRESÁRIO</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">

	<style type="text/css">
		.sidenav {
    height: 100%; 

    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #000;
    background-color: #fff;
}


@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
	</style>
	
</head>
<body>
        
        <div class="container-fluid">
        <div class="row">
        <div class="col-sm-2">
        <div class="sidenav">
        <ul class="nav flex-column nav-pills">
          <li class="nav-item">
      <a href="#av" data-toggle="tab">Ambiente Virtual</a>
    </li>
      <li class="nav-item">
      <a  href="#services" data-toggle="pill">dsdsdsdsd</a>
    </li>
      <li class="nav-item">
      <a  href="#clients" data-toggle="pill">AdsdsddsdsV</a>
    </li>
      <li class="nav-item">
      <a href="#contact" data-toggle="pill">AsdsfgfgdsdsddV</a>
    </li>
          
          </ul>
        </div>
      </div>
      
        <div class="col-sm-10">
       <h1 class="float-left">Olá <?php $newNome = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>
        <a class="float-right" href="<?php echo BASE_URL ?>login/deslogar"><button class="btn btn-outline-dark" id="btn_sair">SAIR</button></a>
      
  
<div class="tab-content">
<div id="av" class="tab-pane in active">Ambiente virtual

</div>

<div id="services" class="tab-pane fade">
  <h2>SOBRE NÓS</h2>
</div>

<div id="clients" class="tab-pane fade">BENEFICIOS
</div>

<div id="contact" class="tab-pane fade">SUPORTE</div>
</div>
</div>
</div>
     </div>





	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
	
</body>
</html>
