<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title></title>

		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">

<style>
 

.carousel-inner{
	width: 100%;
	height: 100%;
}

.conteudo{
	width: 100%;
	height: 1200px;
	border: solid 2px;
	border-radius: 50px;
}

 
  
  </style>

</head>
<body>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
  	<img src="<?php echo BASE_URL; ?>assets/images/AV/<?php echo $logo_av; ?>" class="mx-auto float-left rounded  d-block img-fluid" style="height: 200px; width: 200px; " >
    <p class="display-4 d-flex justify-content-center"><?php echo ucfirst($nome_av) ;?></p>      
    <p class="d-flex justify-content-center"><?php echo $slogan_av;?></p>
    <a href="<?php echo BASE_URL; ?>home"><button class="btn btn-outline-dark mx-auto d-block" >Voltar para as pesquisas</button></a>
  </div>
</div>


<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="317293-large-my-hero-academia-wallpaper-1920x1080-for-tablet.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="goku_ultra_instinct_dragon_ball_super_5k-2560x1440.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="thumb-1920-446026.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<br><br>

   <div class="container">
   <center>
  <button type="button" class="btn btn-outline-dark btn-lg">Função 1</button>
  <button type="button" class="btn btn-outline-dark btn-lg">Função 2 </button>
  <button type="button" class="btn btn-outline-dark btn-lg">Função 3 </button>
  <button type="button" class="btn btn-outline-dark btn-lg">Função 4 </button>
  <button type="button" class="btn btn-outline-dark btn-lg">Função 5 </button>
  </center>
</div>

<br><br>

<div class="container">
<div class="conteudo">
	
</div>
</div>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
</body>
</html>




</html>