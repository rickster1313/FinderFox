<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<style type="text/css">
			.iframe{
				height:1311px;
				width: 70%;
				position: absolute;
				left: 50%;
			}
		</style>
	</head>

	<body>
		<div class="row">
			
		<div class="col-sm-6" style="left: 5%;">
			<form method="POST" id="form_newAV" enctype="multipart/form-data">
            
            <div>
            <h2>Features</h2>
            <div class="form-check-inline">
		      <label class="form-check-label" for="check1">
		        <input type="checkbox" class="form-check-input" id="check1" name="vehicle1" value="something" checked>Ativar
		      </label>
    		</div>
            	 <div class="form-group">
	                <strong>Titulo do 1º </strong>
	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Simple" class="form-control w-25" 
	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

	                <label><strong>Conteudo do 1º</strong></label><br>
                	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                	style="outline: none; border-radius: 6px; border: 1px solid #68319b;"></textarea>
            	</div>
            		<br>
            	<div class="form-group">
	                <strong>Titulo do 2º </strong>
	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Customize" class="form-control w-25" 
	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

	                <label><strong>Conteudo do 2º</strong></label><br>
                	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                	style="outline: none; border-radius: 6px; 
                	border: 1px solid #68319b;"></textarea>
            	</div>
            		<br>
            	<div class="form-group">
	                <strong>Titulo do 3º </strong>
	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Secure" class="form-control w-25" 
	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

	                <label><strong>Conteudo do 3º</strong></label><br>
                	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                	style="outline: none; border-radius: 6px; 
                	border: 1px solid #68319b;"></textarea>
            	</div>

            <hr>
            <h2>Features 2º Parte</h2>
            <div class="form-check-inline">
		      <label class="form-check-label" for="check1">
		        <input type="checkbox" class="form-check-input" id="check1" name="vehicle1" value="something" checked>Ativar
		      </label>
    		</div>
                <div class="form-group">
	                <strong>Titulo do 1º </strong>
	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Create an Account" class="form-control w-25" 
	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

	                <label><strong>Conteudo do 1º</strong></label><br>
                	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                	style="outline: none; border-radius: 6px; 
                	border: 1px solid #68319b;"></textarea>
            	</div>
            		<br>
            	<div class="form-group">
	                <strong>Titulo do 2º </strong>
	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Share with friends" class="form-control w-25" 
	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

	                <label><strong>Conteudo do 2º</strong></label><br>
                	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                	style="outline: none; border-radius: 6px; 
                	border: 1px solid #68319b;"></textarea>
            	</div>
            		<br>
            	<div class="form-group">
	                <strong>Titulo do 3º </strong>
	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Enjoy your life" class="form-control w-25" 
	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

	                <label><strong>Conteudo do 3º</strong></label><br>
                	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                	style="outline: none; border-radius: 6px; 
                	border: 1px solid #68319b;"></textarea>
            	</div>
                <br> 
                
            </div>
             <div>
                <label><strong>Logo</strong></label><br>
                <a href=""><label for='selecao-arquivo'><img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/logoAdd.png"></label></a>
                <input id='selecao-arquivo' type="file" name="logo_txt" size="70"><br>
                <!-- <i>Recomendado imagem  200 x 200 pixels</i> -->
            </div>
			<hr>
            <br><br>
            	<input class="btn btn-outline-dark" type="submit" name="enviar_cad" value="CRIAR" />

        </form>
		</div>

		<div class="col-sm-6" >
			<iframe class="iframe"  src="<?php echo BASE_URL.$av_dados[0]['url']; ?>" > </iframe> 
		</div>

		</div>
	</body>

</html>