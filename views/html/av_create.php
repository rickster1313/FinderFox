<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <style type="text/css">

        .main2{
            padding-left: 20px;

        }
        .descricao{
            text-align: justify;
        }



        @font-face {

            font-family: "BPreplayBold";
            src: url("assets/fonts/BPreplayBold.otf") format("opentype");

        }


        .replay-font{
            font-family: "BPreplayBold";
            font-size: 16px;  
        }

        @font-face {

            font-family: "Champagne & Limousines";
            src: url("assets/fonts/Champagne & Limousines.ttf") format("truetype");

        }

        .film-font{
            font-family: "Champagne & Limousines";
            font-size: 25px;  
        }  

        body{
            font-family: 'bree serif', serif;
        }

    </style>  
</head>

<div class="main2"> 
    <h1> Crie seu AV </h1>
    <hr>
    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content" style="border-radius: 14px;">
                <div class="modal-header" style="background: linear-gradient(45deg, #68319b , #A491BA)">

                    <h4 class="modal-title" style="">Crie seu  Ambiente Virtual</h4>
                </div>
                <div class="modal-body" style="background: linear-gradient(45deg, #A491BA, #CFC1DE);">
                    <p>O Ambiente Virtual é o lugar onde você pode criar e gerenciar a sua página no site e divulgar seu negócio!!<br>
                        Nele você pode gerenciar as funções necessárias para ter uma melhor experiência e avanço!!<br><hr>
                    Para começar informe algumas informações necessárias e criaremos uma Ambiente padrão para você:</p>
                </div>
                <div class="modal-footer" style="background: linear-gradient(45deg, #68319b , #A491BA);">
                    #TrioMonstro
                </div>
            </div>
        </div>
    </div>

    <form method="POST" id="form_newAV" enctype="multipart/form-data">

        <div>
            <div class="form-group">
                <label><strong>Nome do seu AV </strong></label><br>
                <input type="text" id="nome_av" name="nome_empresa_txt" size="40" placeholder="Ex.: Meu Ambiente Virtual" class="form-control w-25" style="outline: none; border-radius: 6px; border: 1px solid #68319b;" required="required">
                <a href="#" data-toggle="tooltip" title="Nome de seu negócio/empresa (isso influenciará no link de sua página). Ex.: www.finderfox.com/meu-ambiente-virtual "></a>
            </div>
            <br> 

        </div>
        <br>
        <div>

            <label><strong>URL</strong></label><br>
            <div style="background-color: rgba(0,0,0,0.2); width: 550px"><?php echo $_SERVER['SERVER_NAME']; ?>/ <input type="text" id="url_av" name="url_txt" required="required" style="border: none;outline: none; background-color: rgba(0,0,0,0.1);width: 400px;"> </div><br>*Não pode conter espaços
            <br> 
        </div>
        <br>
        <div>
            <label><strong>Logo</strong></label><br>
            <a href=""><label for='selecao-arquivo'><img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/logoAdd.png"></label></a>
            <input id='selecao-arquivo' type="file" name="logo_txt" size="70"><br>
            <!-- <i>Recomendado imagem  200 x 200 pixels</i> -->
        </div>
        <br>
        <div>

            <label><strong>Slogan</strong></label><br>
            <input type="text" name="slogan_txt" size="70" required="required" style="outline: none; border-radius: 6px; border: 1px solid #68319b;">

            <img href="#" data-toggle="tooltip1" title="Uma frase simples para uma marca ser sempre lembrada" style="width: 40px; height: 40px;" class="img-fluid" 
                 src="<?php echo BASE_URL; ?>assets/images/lampada.png">
            <br>
            <!--<a href="#" title="Exemplo" data-toggle="popover1" data-trigger="focus" data-content="Gerenciando seu negócio online com maior eficiência..">Exemplo</a> -->
        </div>

        <br>
        <select name="cars" class="custom-select custom-select mb-3" style="width: 444px;">
            <option selected>Selecione uma categoria</option>
            <option value="volvo">1/10</option>
            <option value="fiat">3/10</option>
            <option value="audi">6/10</option>
            <option value="volvo">8/10</option>
            <option value="fiat">9/10</option>
            <option value="audi">10/10</option>

        </select>

        <br><br>
        <input class="btn btn-outline-dark" type="submit" name="enviar_cad" value="CRIAR" />
    </form>
</div>


