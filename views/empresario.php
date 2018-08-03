<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Empresário</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/w3.css">


</head>
<body>


        <!--<h1>Olá <?php $newNome// = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>-->

        <div class="container-fluid" style="padding: 0px">

            <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;min-width: 180px" id="mySidebar">
            <div class="sidenav">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a href="#pag1" data-toggle="tab"  class="w3-bar-item w3-button">1 pagina</a>
                    </li>
                    <li class="nav-item">
                        <a href="#enderecos" data-toggle="tab"  class="w3-bar-item w3-button">Endereços / sedes</a>
                    </li>
                    <li class="nav-item">
                        <a  href="#av_conteudo" id="menu_av" data-toggle="pill" class="w3-bar-item w3-button">Ambiente Virtual</a>
                    </li>
                    <li class="nav-item">
                        <a  href="#pag3" data-toggle="pill" class="w3-bar-item w3-button">3 pagina</a>
                    </li>
                </ul>
            </div>
  <!--<a href="#est" data-toggle="tab" class="w3-bar-item w3-button">Estatisticas</a>
  <a href="#fun" data-toggle="pill" class="w3-bar-item w3-button">Funções</a>
  <a href="#x" data-toggle="pill" class="w3-bar-item w3-button">Link 3</a>-->
</div>

<div id="main" style="overflow: auto;">

<div class="w3-black">
  <button id="openNav" style="outline-style: none;" class="w3-button w3-black w3-xlarge">&#9776;</button>
  <a  href="<?php echo BASE_URL ?>login/deslogar" style="float: right; margin-right: 9px; margin-top: 9px;"><button class="btn btn-danger" id="btn_sair">SAIR</button></a>
</div>
    <div class="tab-content conteudo">   
        <div id="pag1" class="tab-pane in active">
            <h1>Olá <?php $newNome = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>
        </div>
        <div id="enderecos" class="tab-pane fade">
            <div class="tabela-end" style="margin: 40px;">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                        <th>Nome</th>
                        <th>Rua</th>
                        <th width="10%">Número</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>CEP</th>

                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                      </tr>
                      <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="av_conteudo" class="tab-pane fade">
            <?php 
                include($av_status);
                ?>
        </div>
        <div id="pag3" class="tab-pane fade">
            3 pagina
        </div>

    </div>
</div>

</div>
        
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/empresario.js"></script>

</body>
</html>