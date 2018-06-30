<head>
    <style type="text/css">
        .main{
             padding-left: 20px;

        }
        .descricao{
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1> Crie seu AV </h1>
        <hr>
        <div class="descricao">
            O Ambiente Virtual é o lugar onde você pode criar e gerenciar a sua página no site e divulgar seu negócio!!<br>
            Nele você pode gerenciar as funções necessárias para ter uma melhor experiência e avanço!!<br> <br>
                Para começar informe algumas informações necessárias e criaremos uma Ambiente padrão para você:<hr>
        </div>
        <form method="POST" id="form_newAV" enctype="multipart/form-data">
            
            <div>
                <label><strong>Nome do seu AV </strong></label><br>
                <input type="text" id="nome_av" name="nome_empresa_txt" style="outline: none;" required="required">
                <a href="#" data-toggle="tooltip" title="Nome de seu negócio/empresa (isso influenciará no link de sua página)">???</a>
                <br> 
                <a href="#" title="Exemplo" data-toggle="popover" data-trigger="focus" data-content="Meu negócio online (www.finderfox.com/meu-negocio-online).">Exemplo</a>
            </div>
            <br>
            <div>
                <label><strong>URL</strong></label><br>
                <div style="background-color: rgba(0,0,0,0.2); width: 550px"><?php echo $_SERVER['SERVER_NAME']; ?>/ <input type="text" id="url_av" name="url_txt" required="required" style="border: none;outline: none; background-color: rgba(0,0,0,0.1);width: 400px"> </div>
                <br> 
            </div>
            <br>
             <div>
                <label><strong>Logo</strong></label><br>
                <input type="file" name="logo_txt" size="70"><i>Recomendado imagem  200 x 200 pixels</i>
            </div>
            <br>
            <div>
                <label><strong>Slogan</strong></label><br>
                <input type="text" name="slogan_txt" size="70" required="required">
                <a href="#" data-toggle="tooltip1" title="Uma frase simples para uma marca ser sempre lembrada">???</a>
                <br>
                <a href="#" title="Exemplo" data-toggle="popover1" data-trigger="focus" data-content="Gerenciando seu negócio online com maior eficiência..">Exemplo</a> 
            </div>
            <br>

            <br><br>
            <input class="btn btn-outline-dark" type="submit" name="enviar_cad" value="CRIAR" />
        </form>
    </div>
</body>


