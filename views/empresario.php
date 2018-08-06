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
    <style type="text/css">
        .legenda .quadradinho{
            width: 13px;
            height: 13px;
            display: flex;
            align-items: center;    
            padding-left: 13px;
            margin-bottom:5px;
        }
        .legenda{
            padding: 3px;
            width: 40%;
            border:1px black solid;
            float: right;
        }
        .raio{
            margin: 0px;
            background-color: transparent;  
            outline: none;
            border: none;
        }
        .end-tbl{
            height: 600px;
            border:1px black solid;
            margin-bottom: 10px;
            overflow: auto;
        }
        .btn-tbl{
            width: 120px;
            margin: 2px;

        }
        


    </style>

</head>
<body>


        <!--<h1>Olá <?php $newNome// = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>-->

        <div class="container-fluid" style="padding: 0px">

            <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;width: 180px" id="mySidebar">
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

<div class="w3-black" style="width: 100%">
  <button id="openNav" style="outline-style: none;" class="w3-button w3-black w3-xlarge">&#9776;</button>
  <a  href="<?php echo BASE_URL ?>login/deslogar" style="float: right; margin-right: 9px; margin-top: 9px;"><button class="btn btn-outline-danger" id="btn_sair">SAIR</button></a>
</div>
    <div class="tab-content conteudo ">   
        <div id="pag1" class="tab-pane fade">
            <h1>Olá <?php $newNome = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>
        </div>
        <div id="enderecos" class="tab-pane in active">
            <div class="tabela-end" style="margin: 40px;">
                <div class=" end-tbl">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Nome</th>
                        <th>Rua</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Alcance (KM)</th>
                        <th style="text-align: center;">Ações</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $enderecosModel = new enderecosModel();
                        $retorno = $enderecosModel->getEnderecos($_SESSION['id']);
                        $sql = $retorno -> fetchAll();
                        foreach ($sql as $result){
                            if ($result['active'] == 'nao') {
                                echo "<tr class='table-danger' >";
                            }else{
                                echo "<tr class='table-success' >";
                            }
                    ?>
                      
                        <td> <strong><?php echo strtoupper($result['nome']); ?></strong></td>
                        <td><?php echo $result['rua']; ?></td>
                        <td><?php echo $result['cidade']; ?></td>
                        <td><?php echo $result['estado']; ?></td>
                        <td><input type="text" class="raio" name="raio_txt" placeholder="ex.: 50.2" value="<?php echo $result['raio']; ?>"></td>
                        <td style="text-align: center;"><button type="button" class="btn-tbl btn btn-outline-info">Ver detalhes</button></button> 
                            <button type="button" class="btn-tbl btn btn-outline-warning">Alterar</button>
                            <?php if($result['active'] == 'nao'){ ?>
                                <button type="button" class="btn btn-success btn-tbl">Ativar</button>
                                <?php 
                            }else{ ?>
                                <button type="button" class="btn btn-danger btn-tbl">Desativar</button>
                                <?php
                            } ?>
                            <button type="button" class="btn-tbl btn btn-outline-danger">Excluir</button> </td>
                      </tr>
                  <?php } ?>
                    </tbody>
                </table>
                </div>
                <div class="legenda">
                    <div class="quadradinho bg-danger" > Desativo</div>
                    <div class="quadradinho bg-success"> Ativo</div>
                    <strong>Alcance</strong> - Raio de distância máxima para prestar serviços
                </div>
                <br>
                <button type="button" class="btn btn-outline-primary" id="btn_novo_end">Novo Endereço</button>

            </div>
            <div class="modal fade" id="modalEnd">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Novo Endereço / SEDE</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <form id="form_novo_end" method="POST">
                                <label>Nome</label> <input type="text" name="nome_txt" required="required"><br>
                                <label>CEP</label> <input type="text" id="cep_novo" name="cep_txt" required="required"><span id="not_cep"></span><br>
                                <div id="novo_part2" style="display: none">
                                    <label>Rua</label> <input type="text" id="rua" name="rua_txt"><br>
                                    <label>Cidade</label> <input type="text" id="cid" name="cid_txt" required="required"><br>
                                    <label>Estado</label> <input type="text" id="est" name="est_txt" required="required"><br>
                                    <label>Número</label> <input type="text" id="num" name="num_txt" required="required"><br> 
                                    <input type="submit" name="enviar_novo_end" value="Confirmar">
                                </div>
                                
                            </form>
                            
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>

                    </div>
                </div>
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
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/empresario.js"></script>

</body>
</html>