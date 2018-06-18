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
    width: 200px;
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
.sidenav ul{
    padding-top:50px; 
}

.sidenav a:hover {
    color: #000;
    background-color: #fff;
}

.navtop{
    background-color: #111;
    padding: 5px;
    height: 50px;
    width: 100%;
}
.conteudo{
    margin-left: 200px;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
	</style>
	
</head>
<body>
        
<div class="container-fluid" style="padding: 0px">

            <div class="sidenav">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a href="#primeiro" data-toggle="tab">1 pagina</a>
                    </li>
                    <li class="nav-item">
                        <a  href="#av" data-toggle="pill">Ambiente virtual</a>
                    </li>
                    <li class="nav-item">
                        <a  href="#terceiro" data-toggle="pill">3 pagina</a>
                    </li>
                    <li class="nav-item">
                        <a href="#quarto" data-toggle="pill">4 pagina</a>
                    </li>
                </ul>
            </div>

          

            <div class="navtop">
                <a class="float-right" href="<?php echo BASE_URL ?>login/deslogar"><button class="btn btn-outline-danger" id="btn_sair">SAIR</button></a>
            </div>
            
          
            <div class="tab-content conteudo">   
                <div id="primeiro" class="tab-pane in active">
                    <h1>Olá <?php $newNome = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>
                </div>

                <div id="av" class="tab-pane fade">
                    AV
                </div>

                <div id="terceiro" class="tab-pane fade">
                    3 pagina
                </div>

                <div id="quarto" class="tab-pane fade">
                    4 pagina
                </div>
            </div>

</div>





	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
</body>
</html>
