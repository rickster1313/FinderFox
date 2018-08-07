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
        body{
            background-color: #dfcdef;
        }
        input[type='file'] {
            display: none
        }
        .sla:hover {
            background-color: #dfcdef;
            text-decoration: none;
            color: #232323;
    }

    @font-face {

      font-family: "BPreplayBold";
      src: url("assets/fonts/BPreplayBold.otf") format("opentype");

      }


.replay-font{
    font-family: "BPreplayBold";
      
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


        <!--<h1>Olá <?php $newNome// = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>-->

        <div class="container-fluid" style="padding: 0px">

            <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;width: 180px; background-color: #A491BA; " id="mySidebar">
            <div class="sidenav">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a href="#pag1" data-toggle="tab"  class="w3-bar-item film-font sla" style="font-size: 26px;">Estatiscas <img src="https://png.icons8.com/metro/50/000000/positive-dynamic.png" width="26"></a>

                    </li>
                    <li class="nav-item ">
                        <a href="#enderecos" data-toggle="tab"  class="w3-bar-item sla film-font" style="font-size: 26px;">Endereços / sedes <img src="https://png.icons8.com/metro/50/000000/map-marker.png" width="26"></a>
                    </li>
                    <li class="nav-item">
                        <a  href="#av_conteudo" id="menu_av" data-toggle="tab" class="w3-bar-item sla film-font" style="font-size: 26px;">Ambiente Virtual <img src="https://png.icons8.com/metro/50/000000/monitor.png" width="26"></a>
                    </li>
                    <li class="nav-item">
                        <a href="#pagina4" data-toggle="tab"  class="w3-bar-item w3-button film-font sla" style="font-size: 26px;">página 4</a>

                    </li>

                </ul>
            </div>
  <!--<a href="#est" data-toggle="tab" class="w3-bar-item w3-button">Estatisticas</a>
  <a href="#fun" data-toggle="pill" class="w3-bar-item w3-button">Funções</a>
  <a href="#x" data-toggle="pill" class="w3-bar-item w3-button">Link 3</a>-->
</div>

<div id="main" style="overflow: auto;">

<div class="w3-black" style="width: 100%; background: linear-gradient(45deg, #68319b , #A491BA) ">
  <button id="openNav" style="outline-style: none; background-color: #68319b;" class="w3-button w3-xlarge sla">&#9776;</button>
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
                        <td style="text-align: center;"> 
                            <button type="button" class="btn-tbl btn btn-outline-info">Ver detalhes</button>
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
                <button type="button" class="btn btn-outline-dark film-font" style="font-size: 18px; border: 2px solid" id="btn_novo_end">Novo Endereço</button>

            </div>
            <div class="modal fade" id="modalEnd">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header" style="background: linear-gradient(45deg, #68319b , #A491BA);">
                            <h4 class="modal-title film-font">Novo Endereço / SEDE</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <form id="form_novo_end" method="POST">
                                <div class="form-group">
                                <label class="film-font" style="font-size: 18px; ">Nome</label> <input type="text" name="nome_txt" required="required" class="form-control"><br>
                            </div>

                                 <div class="form-group">
                                <label class="film-font" style="font-size: 18px;">CEP</label> <input type="text" id="cep_novo" name="cep_txt" required="required" class="form-control"><span id="not_cep"></span><br>
                            </div>

                                <div id="novo_part2" style="display: none">
                                    <div class="form-group">
                                    <label class="film-font" style="font-size: 18px;">Rua</label> <input type="text" id="rua" name="rua_txt" class="form-control"><br>
                                </div>

                                <div class="form-group">
                                    <label class="film-font" style="font-size: 18px;">Cidade</label> <input type="text" id="cid" name="cid_txt" required="required" class="form-control"><br>
                                </div>

                                <div class="form-group">
                                    <label class="film-font" style="font-size: 18px;">Estado</label> <input type="text" id="est" name="est_txt" required="required" class="form-control"><br>
                                </div>

                                <div class="form-group">
                                    <label class="film-font" style="font-size: 18px;">Número</label> <input type="text" id="num" name="num_txt" required="required" class="form-control"><br>
                                </div>

                                    <input type="submit" name="enviar_novo_end" value="Confirmar" class="btn btn-outline-dark film-font" style="font-size: 18px;" >
                                </div>
                                
                            </form>
                            
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer" style="background: linear-gradient(45deg, #68319b , #A491BA);">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Fechar</button>
                          </div>

                    </div>
                </div>
            </div>
        </div>
      

        <div id="av_conteudo" class="tab-pane fade">
            <?php 
                include($av_status);

                if($av_status == "html/av_create.php"){ ?>
                <script type="text/javascript">
                    valor = 1;
                </script>

                <?php } ?>

        </div>

          <div id="pagina4" class="tab-pane fade">
            <h1>página4</h1>
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