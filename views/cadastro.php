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


<style type="text/css">


@font-face {

      font-family: "BPreplayBold";
      src: url("assets/fonts/BPreplayBold.otf") format("opentype");

      }


.replay-font{
    font-family: "BPreplayBold";
    font-size: 16px;  
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
	<div class="container" >
	<center>
	<form method="POST" id="form_cadastro" class="" style="">
	    <label class="film-font" style="font-size: 18px;">Nome:</label>
		<div class="input-group mb-3" style="width: 50%; ">
		<input class="form-control" style="border-radius: 15px; border: 2px solid #ddb3b3; background: #f2f2f3; box-shadow: 0 0 0 0" type="text" name="nome_txt" required="required" placeholder="Nome..."  /><br><br>
        </div>
       
        <label class="film-font" style="font-size: 18px;">Data de Nascimento:</label>
		<div class="input-group mb-3" style="width: 50%;">
		<input class="form-control" style="border-radius: 15px; border: 2px solid #ddb3b3;background: #f2f2f3; box-shadow: 0 0 0 0" type="date" name="data_txt" required="required"><br><br>
		</div>

        <label class="film-font" style="font-size: 18px;">E-mail:</label>
		<div class="input-group mb-3" style="width: 50%;">
      
		<input class="form-control" style="border-radius: 15px;border: 2px solid #ddb3b3;background: #f2f2f3; box-shadow: 0 0 0 0" id="email" type="email_txt" name="email_txt" required="required" placeholder="exemplo@email.com"><div id="resp_email"></div><br><br>
		</div>
         
        <label class="film-font" style="font-size: 18px;">Senha:</label>
		<div class="input-group mb-3" style="width: 50%;">
      
		<input class="form-control" style="border-radius: 15px;border: 2px solid #ddb3b3;background: #f2f2f3; box-shadow: 0 0 0 0" id="senha" type="password" name="senha_txt" required="required" placeholder="************">
		<div id="forca"></div>
	</div>


        <label class="film-font" style="font-size: 18px;">Telefone:</label>
		<div class="input-group mb-3" style="width: 50%;">
      
		<input class="form-control" style="border-radius: 15px;border: 2px solid #ddb3b3;background: #f2f2f3; box-shadow: 0 0 0 0" id="telefone" type="text"  placeholder="(XX) XXXXX-XXXX" name="telefone_txt" required="required" /><br><br>
         </div>
</center>
        <div class="" >
        <label class="film-font" style="font-size: 18px;">Sexo</label><br>
        <div class="custom-control custom-radio" >
    <input type="radio" class="custom-control-input"  id="customRadio" name="sexo_text" checked="checked" >
    <label class="custom-control-label film-font" for="customRadio" style="font-size: 18px;" >Masculino</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customRadio2" name="sexo_text">
    <label class="custom-control-label film-font" for="customRadio2" style="font-size: 18px;">Feminino</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customRadio3" name="sexo_text">
    <label class="custom-control-label film-font" for="customRadio3" style="font-size: 18px;">Outros</label>
  </div> 
  </div>
  
<br>
    <label class="film-font" style="font-size: 18px;">Tipo de Pessoa</label><br>
        <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" value="fisica" id="customRadio4" name="pessoa_txt" checked="checked">
    <label class="custom-control-label film-font" for="customRadio4" style="font-size: 18px;">Fisica</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" value="juridica" id="customRadio5" name="pessoa_txt">
    <label class="custom-control-label film-font" for="customRadio5" style="font-size: 18px;">Juridica</label>
  </div> 
  <br><br>

		
		<div class="input-group mb-3" style="width: 50%;">
     
		  <div id="div_cpf">
			<input class ="form-control" id="cpf_cnpj" style="border-radius: 15px;border: 2px solid #ddb3b3;background: #f2f2f3; box-shadow: 0 0 0 0" placeholder="CPF..." type="text" name="CPF_CNPJ_txt" required="required" />
		</div>
	</div>
		<div id="resp_pessoa"></div>

		<input class="btn btn-outline-dark mx-auto d-block film-font" style="font-size: 18px;" type="submit" name="enviar_cad" value="ENVIAR" /><br><br>
	</form>
	</div>
	
	
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
        	
</body>
</html>