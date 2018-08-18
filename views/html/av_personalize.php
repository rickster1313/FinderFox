<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<style type="text/css">
			.iframe{
				width: 100%;
                height: 100%;
			}
            .form-check-inline{
                margin-bottom: 20px;
            }
            .sobre1{
                width: 100%;
                padding: 10px;
                background-color: rgba(0,0,0,0.1);
                border-radius: 5px;
            }
		</style>
	</head>

	<body>
		<div class="row" style="width: 100%;margin: 0px">
			
    		<div class="col-sm-3" style="width: 100%;">
    			<form method="POST" id="form_newAV" enctype="multipart/form-data">
                
                <div class="sobre1">
                    <div>

                    <div class="form-check-inline">
                      <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input" id="check_sobre0" name="vehicle1" value="something" checked="checked" >Ativar 
                      </label>
                    </div>
                    <div id="content_sobre0">
                        <label><strong>IMG</strong></label><br>
                        <a href="#"><label for='selecao-arquivo1'><img class="img-fluid" style="width: 69px;" src="<?php echo BASE_URL; ?>assets/images/simbolo-imagen.jpg"></label></a>
                        <input id='selecao-arquivo1' type="file" name="logo_txt" size="70"><br>
                        <!-- <i>Recomendado imagem  200 x 200 pixels</i> -->
                    </div>

                        
                    </div>
                </div>

                <div>
                <h2>SOBRE</h2>
                <div class="sobre1">
                    <strong style="font-size: 20px">Parte 1</strong><br>
                    <div class="form-check-inline">
        		      <label class="form-check-label" for="check1">

        		        <input type="checkbox" class="form-check-input" id="check_sobre1" name="vehicle1" value="something" checked="checked" >Ativar
        		      </label>
            		</div>
                    <div id="content_sobre1">
                    	 <div class="form-group">
                            <label><strong>Titulo</strong></label><br>
                            <input type="text" id="primeiro" name="primeiro_t" size="60" placeholder="Simple" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required"><br>

        	                <input type="text" id="primeiro" name="primeiro_t" size="60" placeholder="Simple" class="form-control" 
        	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

                        	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                        	style="outline: none; border-radius: 6px; border: 1px solid #68319b;"></textarea>
                    	</div>
                    		<br>
                    	<div class="form-group">
        	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Customize" class="form-control" 
        	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

                        	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                        	style="outline: none; border-radius: 6px; 
                        	border: 1px solid #68319b;"></textarea>
                    	</div>
                    		<br>
                    	<div class="form-group">
        	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Secure" class="form-control" 
        	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">
                        	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                        	style="outline: none; border-radius: 6px; 
                        	border: 1px solid #68319b;"></textarea>
                    	</div>
                    </div>
                </div>
                <hr>
                <div class="sobre1">
                    <strong style="font-size: 20px">Parte 2</strong><br>
                <div class="form-check-inline">
    		      <label class="form-check-label" for="check1">
    		        <input type="checkbox" class="form-check-input" id="check_sobre2" name="vehicle1" value="something" checked>Ativar
    		      </label>
        		</div >
                <div id="content_sobre2">
                    <div class="form-group">

                            <input type="text" id="primeiro" name="primeiro_t" size="60" placeholder="Simple" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

                            <textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;"></textarea>
                        </div>
                            <br>
                        <div class="form-group">
                            <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Customize" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">

                            <textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                            style="outline: none; border-radius: 6px; 
                            border: 1px solid #68319b;"></textarea>
                        </div>
                            <br>
                        <div class="form-group">
                            <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Secure" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">
                            <textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                            style="outline: none; border-radius: 6px; 
                            border: 1px solid #68319b;"></textarea>
                        </div>
                    </div>
                    </div>
                    <br> 
                    
                </div>
                 <div>
                    <label><strong>Logo</strong></label><br>
                    <a href=""><label for='selecao-arquivo2'><img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/logoAdd.png"></label></a>
                    <input id='selecao-arquivo2' type="file" name="logo_txt" size="70"><br>
                    <!-- <i>Recomendado imagem  200 x 200 pixels</i> -->
                </div>
    			<hr>
                <br><br>
                	<input class="btn btn-outline-dark" type="submit" name="salve" value="Salvar" />

            </form>
    		</div>

    		<div class="col-sm-9" style="width: 100%">
    			<iframe class="iframe"  src="<?php echo BASE_URL.$av_dados[0]['url']; ?>" > </iframe> 
    		</div>

		</div>
	</body>

</html>