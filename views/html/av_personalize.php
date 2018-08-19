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
        <?php 
            $avsModel = new avsModel();
            $sql = $avsModel->procuraAV($_SESSION['id']);
            $dadosAV = $sql -> fetch();
        ?> 
		<div class="row" style="width: 100%;margin: 0px">
			
    		<div class="col-sm-3" style="width: 100%;">
    			<form method="POST" id="form_newAV" enctype="multipart/form-data">
                <h2>HOME</h2>
                <div class="sobre1">
                    <div>

                    <div class="form-check-inline">
                      <label class="form-check-label" for="check1">
                        <?php if($dadosAV['img_home_active'] == "yes"){ ?> 
                            <input type="checkbox" class="form-check-input" id="check_sobre0" name="vehicle1" value="something" checked="checked">
                        <?php }else{ ?>
                            <input type="checkbox" class="form-check-input" id="check_sobre0" name="vehicle1" value="something"> <?php } ?>
                            Ativo 
                      </label>
                    </div>
                    <div id="content_sobre0">
                        <label><strong>Imagem</strong></label><br>
                        <a href="#"><label for='selecao-arquivo0'><img class="img-fluid" style="width: 69px;" src="<?php echo BASE_URL; ?>assets/images/logoAdd.png"></label></a>
                        <input id='selecao-arquivo0' type="file" name="logo_txt" size="70"><br>
                        <!-- <i>Recomendado imagem  200 x 200 pixels</i> -->
                    </div>

                        
                    </div>
                </div>

                <div>
                    <hr>
                <h2>SOBRE</h2>
                <div class="sobre1">
                    <strong style="font-size: 20px">Parte 1</strong><br>
                    <div class="form-check-inline">
        		      <label class="form-check-label" for="check1">
                        <?php if($dadosAV['part1_active'] == "yes"){ ?> 
                            <input type="checkbox" class="form-check-input" id="check_sobre1" name="vehicle1" value="something" checked="checked">
                        <?php }else{ ?>
                            <input type="checkbox" class="form-check-input" id="check_sobre1" name="vehicle1" value="something"> <?php } ?>
                            Ativo
        		      </label>
            		</div>
                    <div id="content_sobre1">
                    	 <div class="form-group">
                            <label><strong>Titulo</strong></label><br>
                            <input type="text" id="primeiro" name="primeiro_t" size="60" placeholder="Simple" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required" value="<?php echo $dadosAV['part1_title']; ?>" ><br>

        	                <input type="text" id="primeiro" name="primeiro_t" size="60" placeholder="Simple" class="form-control" 
        	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required" value="<?php echo $dadosAV['part1_nome1']; ?>" >

                        	<textarea type="text" name="slogan_txt" class="form-control" placeholder="Lorem ipsum dolor sit amet..." required="required" style="outline: none; border-radius: 6px; border: 1px solid #68319b;height: 150px;resize: none;margin-top: 5px" ><?php echo $dadosAV['part1_text1']; ?></textarea>
                    	</div>
                    		<br>
                    	<div class="form-group">
        	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Customize" class="form-control" 
        	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required" value="<?php echo $dadosAV['part1_nome2']; ?>" >

                        	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                        	style="outline: none; border-radius: 6px; 
                        	border: 1px solid #68319b;height: 150px;resize: none;margin-top: 5px" ><?php echo $dadosAV['part1_text2']; ?></textarea>
                    	</div>
                    		<br>
                    	<div class="form-group">
        	                <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Secure" class="form-control" 
        	                style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required" value="<?php echo $dadosAV['part1_nome3']; ?>" >
                        	<textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                        	style="outline: none; border-radius: 6px; 
                        	border: 1px solid #68319b;height: 150px;resize: none;margin-top: 5px" ><?php echo $dadosAV['part1_text3']; ?></textarea>
                    	</div>
                    </div>
                </div>
                <br>
                <div class="sobre1">
                    <strong style="font-size: 20px">Parte 2</strong><br>
                <div class="form-check-inline">
    		      <label class="form-check-label" for="check1">
    		         <?php if($dadosAV['part2_active'] == "yes"){ ?> 
                            <input type="checkbox" class="form-check-input" id="check_sobre2" name="vehicle1" value="something" checked="checked">
                        <?php }else{ ?>
                            <input type="checkbox" class="form-check-input" id="check_sobre2" name="vehicle1" value="something"> <?php } ?>
                            Ativo
    		      </label>
        		</div >
                <div id="content_sobre2">
                    <div class="form-group">

                            <input type="text" id="primeiro" name="primeiro_t" size="60" placeholder="Simple" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required" value="<?php echo $dadosAV['part2_nome1']; ?>" >

                            <textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;height: 150px;resize: none;margin-top: 5px"><?php echo $dadosAV['part2_text1']; ?> </textarea>
                        </div>
                            <br>
                        <div class="form-group">
                            <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Customize" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required" value="<?php echo $dadosAV['part2_nome2']; ?>" >

                            <textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                            style="outline: none; border-radius: 6px; 
                            border: 1px solid #68319b;height: 150px;resize: none;margin-top: 5px"><?php echo $dadosAV['part2_text2']; ?></textarea>
                        </div>
                            <br>
                        <div class="form-group">
                            <input type="text" id="primeiro" name="primeiro_t" size="40" placeholder="Secure" class="form-control" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required" value="<?php echo $dadosAV['part2_nome3']; ?>" >
                            <textarea type="text" name="slogan_txt" class="form-control" size="70" placeholder="Lorem ipsum dolor sit amet..." required="required" 
                            style="outline: none; border-radius: 6px; 
                            border: 1px solid #68319b;height: 150px;resize: none;margin-top: 5px"><?php echo $dadosAV['part2_text3']; ?></textarea>
                        </div>
                        <div id="content_sobre0">
                            <label><strong>Imagem</strong></label><br>
                            <a href="#"><label for='selecao-arquivo1'><img class="img-fluid" style="width: 69px;" src="<?php echo BASE_URL; ?>assets/images/logoAdd.png"></label></a>
                            <input id='selecao-arquivo1' type="file" name="logo_txt" size="70"><br>
                            <!-- <i>Recomendado imagem  200 x 200 pixels</i> -->
                        </div>
                    </div>
                    </div>
                    <br> 
                    <hr>
                    <h2>GALERIA</h2>
                    
                </div>
                 <div class="sobre1">
                    <div>

                    <div class="form-check-inline">
                      <label class="form-check-label" for="check1">
                         <?php if($dadosAV['galery_active'] == "yes"){ ?> 
                            <input type="checkbox" class="form-check-input" id="check_sobre3" name="vehicle1" value="something" checked="checked">
                        <?php }else{ ?>
                            <input type="checkbox" class="form-check-input" id="check_sobre3" name="vehicle1" value="something"> <?php } ?>
                            Ativo 
                      </label>
                    </div>
                    <div id="content_sobre3">
                        <label><strong>Selecione as Imagens</strong></label><br>
                        <a href="#"><label for='selecao-arquivo2'><img class="img-fluid" style="width: 69px;" src="<?php echo BASE_URL; ?>assets/images/logoAdd.png"></label></a>
                        <input id='selecao-arquivo2' type="file" name="logo_txt" multiple><br>
                        <!-- <i>Recomendado imagem  200 x 200 pixels</i> -->
                        <div class="form-check-inline">
                      <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input" id="check_manter" name="vehicle1" value="something" checked="checked" ><label><strong>Manter imagens anteriores </strong></label><br>
                        <i>Deselecionar esse caixa limpa as fotos antigas</i>
                      </label>
                    </div>
                    </div>
                    

                        
                    </div>
                </div>
                <br>
                <div class="sobre1">
                    <div>
                        <strong style="font-size: 20px">Contatos</strong><br>
                        <label for="sel1">Tipo e ULR:</label>
                        <?php 
                            $contatos = explode(",", $dadosAV['tipos']);
                            $urls = explode("$!$", $dadosAV['tipos_val']);
                            for($x = 0;$x<=3;$x++){
                                if(!isset($contatos[$x])){
                          ?>
                       
                          <select class="form-control w-75" id="sel1">
                            <option></option>
                            <option value="face" >Facebook</option>
                            <option value="twitter" >Instagram</option>
                            <option value="youtube" >YouTube</option>
                            <option value="insta" >Twitter</option>
                          </select>

                       <input type="text" id="primeiro" name="primeiro_t" placeholder="https://seulink.com" class="form-control w-75" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;margin-bottom: 8px;margin-top: 3px" value="" >
                        <?php }else{ ?>
                            <select class="form-control w-75" id="sel1">
                                <option></option>
                                <?php if ($contatos[$x] == "face"){ ?><option selected="selected" value="face" >Facebook</option> <?php } else { ?> <option value="face" >Facebook</option><?php } ?>
                                <?php if ($contatos[$x] == "twitter"){ ?><option selected="selected" value="Twitter" >Twitter</option> <?php } else { ?> <option value="twitter" >Instagram</option><?php } ?>
                                <?php if ($contatos[$x] == "youtube"){ ?><option selected="selected" value="youtube" >YouTube</option> <?php } else { ?> <option value="youtube" >YouTube</option><?php } ?>
                                <?php if ($contatos[$x] == "insta"){ ?><option selected="selected" value="insta" >Instagram</option> <?php } else { ?> <option value="insta" >Twitter</option><?php } ?>
                                
                                
                                
                          </select>
                            <input type="text" id="primeiro" name="primeiro_t" placeholder="https://seulink.com" class="form-control w-75" 
                            style="outline: none; border-radius: 6px; border: 1px solid #68319b;margin-bottom: 8px;margin-top: 3px" value="<?php echo$urls[$x]; ?>" >
                      <?php } } ?>
                    </div>
                </div>
    			
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