
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>FinderFox</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style_circ.css">


<style type="text/css">

 .form-control::-webkit-input-placeholder {
	 color: #D3D3D3;
}

.form-control:-moz-placeholder { /* Firefox 18- */
	 color: #D3D3D3;
}

.form-control::-moz-placeholder {  /* Firefox 19+ */
	 color: #D3D3D3;
}

.form-control:-ms-input-placeholder {  
	 color: #D3D3D3;  
}

@font-face {

			font-family: "BPreplayBold";
			src: url("assets/fonts/BPreplayBold.otf") format("opentype");

			}


.replay-font{
		font-family: "BPreplayBold";
		font-size: 40px;  
			 } 

		@font-face {

			font-family: "Champagne & Limousines Bold";
			src: url("assets/fonts/Champagne & Limousines Bold.ttf") format("truetype");

			}


.film-font{
		font-family: "Champagne & Limousines Bold";
		font-size: 25px;  
			 } 

</style>

</head>
	
<body style="background-color:#D3D3D3;">
		
		
		<div class="container-fluid" style="padding: 0px;">
			<div class="jumbotron" style="background-image: url(assets/images/pessoa_feliz.jpg);">
				<div class="botoes" style="">
				<a href="<?php echo BASE_URL; ?>login"><button class="btn btn-outline-dark ">LOGIN</button></a>
				<a href="<?php echo BASE_URL; ?>cadastro"><button class="btn btn-outline-dark">CADASTRO</button></a>
			</div>
				<img src="">
			<h1 class="text-center replay-font">FinderFox</h1> 
			<p class="text-center film-font">Gerenciando seu negócio e vendendo pastel de flango na esquina do alberto</p>
			<input class="form-control mx-auto d-block" name="pesquisaAV_txt" id="myInput" type="text" placeholder="Pesquise o AV desejado..." style="width:40%; background: rgba(0,0,0,0.2); color: #fff; box-shadow: 0 0 0 0">
		</div>	
	

		<section class="color-6">
<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center cl-effect-3 slide" style="margin-top:-31.5px;">
	<ul class="navbar-nav nav">
		<li class="nav-item ">
			<a id="home_p" class="nav-link" href="#Home" data-toggle="tab">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#interacao" data-toggle="tab">Interação</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#Beneficios" data-toggle="tab">Beneficios</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#Suporte" data-toggle="tab">Suporte</a>
		</li>
	</ul>
</nav>
</section>
</div>

<br>

<div class="container">
<div class="tab-content">
<div id="Home" class="tab-pane in active">
	<div class="ambiente" id="resultado_av" style="width: 100%; height: auto;padding-bottom:30px;  background: rgba(0,0,0,0.6); ">
	
	</div>

	<ul class="pagination justify-content-center" style="margin:20px 0">
		<li class="page-item"><a class="page-link" href="#">Anterior</a></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">Próximo</a></li>
	</ul>

</div>

<div id="interacao" class="tab-pane fade">
	<h2>Area de Interação</h2>

	<div class="container">
	<img src="<?php echo BASE_URL; ?>assets/images/6.jpg" alt="Avatar" style="width:100%;">
	<p>ELIZA: oi luciano xuxuzinho</p>
	<span class="time-right">11:00</span>
</div>


<div class="form-group">
			<input type="text" class="form-control" placeholder="Digitar..." name="text2">
		</div>

</div>

<div id="Beneficios" class="tab-pane fade">BENEFICIOS
	<section class="main">
			
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info">
								<h3>Use what you have</h3>
								<p>by Angela Duncan <a href="http://drbl.in/eOPF">View on Dribbble</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info">
								<h3>Common Causes of Stains</h3>
								<p>by Antonio F. Mondragon <a href="http://drbl.in/eKMi">View on Dribbble</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info">
								<h3>Pink Lightning</h3>
								<p>by Charlie Wagers <a href="http://drbl.in/ekhp">View on Dribbble</a></p>
							</div>
						</div>
					</li>
				</ul>
				
			</section>
</div>

<div id="Suporte" class="tab-pane fade">

	<div class="container">
	<div class="row">
		<div class="col-sm-5" >
			<img src="<?php echo BASE_URL; ?>assets/images/43386.jpg" style="width: 65%;">
		</div>
		<div class="col-sm-7">
			<form action="/action_page.php">
    <div class="form-group">
      <label for="email">Nome:</label>
      <input type="email" class="form-control" id="nome" placeholder="fulano de tal" name="nome">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="pwd" placeholder="exemplo@gmail.com" name="email">
    </div>
     <div class="form-group">
   <label for="comment">Comentario:</label>
      <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Com oque podemos ajuda?"></textarea>
      </div>
    <button type="submit" class="btn btn-outline-dark "">Enviar</button>
  </form>
		</div>
	</div>
	</div>

</div>

</div>

</div>

	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.79639.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/home.js"></script>
	

<script type="text/javascript">
	$j(function(){
		 $j('.nav-item').bind('click', function(){
					$j('').animate({
							 
					},{
							 duration:2000,
							 complete:function(){
										console.log("animação finalizada");
							 },
							 start:function(){
										console.log("animação iniciada");
							 },
							 step:function(){
										console.log("nem eu sei")
							 }
					})
		 });
});
</script>

</body>
</html>

