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
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/set2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/set1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>

   


    
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
            float: right;
            background-color: #EAE8E3;
        }
        .raio{
            margin: 0px;
            background-color: transparent;  
            outline: none;
            border: none;
        }
        .end-tbl{
            height: 600px;
            background-color: #EAE8E3;
            margin-bottom: 10px;
            overflow: auto;
            border-radius: 10px;
            box-shadow: 6px 6px 10px #777570;
        }
        .btn-tbl{
            width: 120px;
            margin: 2px;


        }
        .tam{
            font-size: 15px;
        }
        body{
            background-color: #dfcdef;
            font-family: 'Bree Serif', serif;
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

             @font-face {

            font-family: "Typo Hoop";
            src: url("assets/fonts/Typo Hoop_Light Demo.otf") format("opentype");

            }

       .topfont{
        font-family: "Typo Hoop";
        font-size: 16px;  
             }  

             

    </style>

</head> 
<body>


        <!--<h1>Olá <?php $newNome// = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>-->

        <div class="container-fluid" style="padding: 0px">

            <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;width: 180px; background-color: #A491BA; " id="mySidebar">
            <div class="sidenav ">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a href="#pag1" data-toggle="tab"  class="w3-bar-item  sla" style="font-size: 19px;"><img src="https://png.icons8.com/metro/50/000000/positive-dynamic.png" width="26">  Estatiscas </a>

                    </li>
                    <li class="nav-item ">
                        <a href="#enderecos" data-toggle="tab"  class="w3-bar-item sla " style="font-size: 19px;"><img src="https://png.icons8.com/metro/50/000000/map-marker.png" width="26">  Endereços / sedes </a>
                    </li>
                    <li class="nav-item">
                        <a  href="#av_conteudo" id="menu_av" data-toggle="tab" class="w3-bar-item sla " style="font-size: 19px;"><img src="https://png.icons8.com/metro/50/000000/monitor.png" width="26">  Ambiente Virtual </a>
                    </li>
                    <li class="nav-item">
                        <a href="#pagina4" data-toggle="tab" class="w3-bar-item w3-button sla" style="font-size: 19px;"> <img src="<?php echo BASE_URL;?>assets/images/configuration_13194.png" width="26"> Gerenciar Funções</a>

                    </li >
                        <li class="nav-item">
                        <a href="#pagina5" data-toggle="tab"  class="w3-bar-item w3-button  sla" style="font-size: 19px;"> #Lembrete</a>

                    </li>
                    <li class="nav-item">
                        <a href="#pagina6" data-toggle="tab"  class="w3-bar-item w3-button  sla" style="font-size: 19px;">  #Agendamento</a>

                    </li>
                
                </ul>
            </div>
  <!--<a href="#est" data-toggle="tab" class="w3-bar-item w3-button">Estatisticas</a>
  <a href="#fun" data-toggle="pill" class="w3-bar-item w3-button">Funções</a>
  <a href="#x" data-toggle="pill" class="w3-bar-item w3-button">Link 3</a>-->
</div>

<div id="main">

<div class="w3-black" style="width: 100%; background: linear-gradient(45deg, #68319b , #A491BA) ">
  <button id="openNav" style="outline-style: none; background-color: #68319b;" class="w3-button w3-xlarge sla">&#9776;</button>
  <a  href="<?php echo BASE_URL ?>login/deslogar" style="width: 30px; margin-top: 4px; float: right; margin-right: 39px;margin-left: 20px; text-align: center;text-decoration: none;color:black"> <!-- Tinha o id="btn_sair" -->
    <img src="<?php echo BASE_URL; ?>assets/images/signout_106525.png" width="30"> Sair
  </a>
  <a href="<?php echo BASE_URL; ?>home" style="width: 30px;margin-top: 4px; float: right; text-align: center;text-decoration: none;color:black">
      <img src="<?php echo BASE_URL; ?>assets/images/homeminimono_105801.png" width="30">
      Home
  </a>
</div>

  
    <div class="tab-content conteudo ">   
        <div id="pag1" class="tab-pane fade">
            <h1>Olá <?php $newNome = explode(" ", $nome);echo strtoupper($newNome[0]);?></h1>
        </div>
        <div id="enderecos" class="tab-pane fade">
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
                        <td><input type="text" id="raio<?php echo $result['id_end'];?>" class="raio" name="raio_txt" placeholder="ex.: 50.2" value="<?php echo $result['raio']; ?>"></td>
                        <td style="text-align: center;"> 

                            <button type="button" class="btn-tbl btn btn-outline-info" data-toggle="modal" data-target="#my2Modal<?php echo $result['id_end']; ?>">
                            Ver detalhes</button>

                                   <div class="modal fade" id="my2Modal<?php echo $result['id_end']; ?>">
                                    
                                    <div class="modal-dialog modal-lg">
                                      <div style="background-color: #dfcdef;" class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Detalhes</h4>
                                        </div>
                                       
                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <p>Veja as informações detalhadamente:</p>

                                            <table style="border-radius: 3px; position: absolute; top: 55%; width: 40%; left: 55%;" class="table table-striped">
                                                <tbody>
                                                  <tr>
                                                    <td><strong>Nome</strong></td>
                                                    <td><?php echo $result['nome']; ?></td> <!-- Variaveis do php -->
                                                  </tr>
                                                  <tr>
                                                    <td><strong>Rua</strong></td>
                                                    <td><?php echo $result['rua']; ?></td><!-- Variaveis do php -->
                                                  </tr>
                                                  <tr>
                                                    <td><strong>Número</strong></td>
                                                    <td><?php echo $result['numero']; ?></td><!-- Variaveis do php -->
                                                  </tr>
                                                  <tr>
                                                    <td><strong>CEP</strong></td>
                                                    <td><?php echo $result['cep']; ?></td><!-- Variaveis do php -->
                                                  </tr>
                                                  <tr>
                                                    <td><strong>Cidade</strong></td>
                                                    <td><?php echo $result['cidade']; ?></td><!-- Variaveis do php -->
                                                  </tr>
                                                  <tr>
                                                    <td><strong>Estado</strong></td>
                                                    <td><?php echo $result['estado']; ?></td><!-- Variaveis do php -->
                                                  </tr>
                                                  <tr>
                                                    <td><strong>Alcance     </strong></td>
                                                    <td><?php echo $result['raio']; ?> KM</td><!-- Variaveis do php -->
                                                  </tr>
                                                </tbody>
                                              </table>


                                            <img src="<?php echo BASE_URL; ?>assets/images/Mapa_centro_Copenhague2.jpg" 
                                          style=" width: 760px; height: 700px;" class="float-left img-thumbnail">
                                          
                                            
                                        </div>
                                        
                                        <!-- Modal footer   -->
                                        <div class="modal-footer">
                                          <h5>@TrioMonstro</h5>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>

                            <button class="btn-tbl btn btn-outline-warning btn_alt" value="modalAlt<?php echo $result['id_end'];?>">Alterar</button><br>
                            <?php if($result['active'] == 'nao'){ ?>
                                <button name="btn_on_off" id="id<?php echo $result['id_end'];?>" value="ativar" type="button" class="btn btn-success btn-tbl">Ativar</button>
                                <?php 
                            }else{ ?>
                                <button name="btn_on_off" id="id<?php echo $result['id_end'];?>" value="desativar" type="button" class="btn btn-danger btn-tbl">Desativar</button>
                                <?php
                            } ?>
                            <?php if($retorno -> rowCount() > 1){ ?>
                            <button type="button" class="btn-tbl btn btn-outline-danger btn_del" value="id<?php echo $result['id_end'];?>">Excluir</button> <?php }else{ ?> 
                            <button type="button" class="btn-tbl btn btn-outline-danger btn_del" disabled="disabled" title="É obrigatório no mínimo 1 endereço! " value="id<?php echo $result['id_end'];?>">Excluir</button> <?php } ?>
                            </td>
                      </tr>

                  <?php } ?>
                    </tbody>
                </table>
                </div>
                <?php foreach ($sql as $resultAlt){ ?>
                <!-- ################# modais de alterar ######################-->
                    <!-- The Modal -->
                    <div class="modal fade" id="modalAlt<?php echo $resultAlt['id_end'];?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="background-color: #F4EDE8;">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Alterar <strong><?php echo $resultAlt['nome']; ?></strong></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body" style="display: flex; justify-content: center; ">
                            <form id="id<?php echo $resultAlt['id_end'];?>" name="form_alterar_end" method="POST">
                                
                           
                                <span class="input input--yoko">
                                    <input type="text" name="nome_txt" required="required" class="input__field input__field--yoko" value="<?php echo $resultAlt['nome']; ?>">
                                    <label class="input__label input__label--yoko" for="nome">
                                        <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">Nome</span>
                                    </label> 
                                </span>
                                  <br>
                                  <span class="input input--yoko">
                                    <input type="text" name="cep_txt" required="required" class=" cep_alt input__field input__field--yoko" value="<?php echo $resultAlt['cep']; ?>">
                                    <label class="input__label input__label--yoko" for="cep">
                                        <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">CEP</span>
                                    </label><span class="not_cep_alt"></span><br>
                                </span>
                                <br>
                                <div class="alt_part2" name ="id<?php echo $resultAlt['id_end'];?>">
                                    
                                
                                    <span class="input input--yoko">
                                        <input type="text" name="rua_txt" required="required" class="alt_rua input__field input__field--yoko" value="<?php echo $resultAlt['rua']; ?>">
                                        <label class="input__label input__label--yoko" for="rua">
                                            <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">Rua</span>
                                        </label> 
                                        
                                    </span>
                                     <br>

                                    

                                    <span class="input input--yoko">
                                        <input type="text" name="cid_txt" required="required" class="alt_cid input__field input__field--yoko" value="<?php echo $resultAlt['cidade']; ?>">
                                        <label class="input__label input__label--yoko" for="cid">
                                            <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">Cidade</span>
                                        </label> 
                                    </span>
                                     <br>

                                    <span class="input input--yoko">
                                        <input type="text" name="est_txt" required="required" class="alt_est input__field input__field--yoko" value="<?php echo $resultAlt['estado']; ?>">
                                        <label class="input__label input__label--yoko" for="est">
                                            <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">Estado</span>
                                        </label> 
                                    </span>
                                    <br>

                                    <span class="input input--yoko">
                                        <input type="text" name="num_txt" required="required" class="input__field input__field--yoko" value="<?php echo $resultAlt['numero']; ?>">
                                        <label class="input__label input__label--yoko" for="numero">
                                            <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">Numero</span>
                                        </label> 
                                    </span>
                                    <br>
                                
                                <span class="input input--yoko">
                                    <input type="text" name="raio_txt" required="required" class="input__field input__field--yoko" value="<?php echo $resultAlt['raio']; ?>">
                                    <label class="input__label input__label--yoko" for="raio">
                                        <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">Alcance(KM)</span>
                                    </label> 
                                </span>
                                <br>
                                <input type="submit" name="alterar_end" value="Alterar" class="btn btn-outline-dark" style="font-size: 18px; box-shadow: 2px 2px 3px #232323;" >
                            </div>
                            </form>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            
                          </div>

                        </div>
                      </div>
                    </div>
                <?php } ?>
                <div class="legenda">
                    <div class="quadradinho bg-danger" > Desativo</div>
                    <div class="quadradinho bg-success"> Ativo</div>
                    <strong>Alcance</strong> - Raio de distância máxima para prestar serviços
                </div>
                <br>
                <button type="button" class="btn btn-outline-dark " style="font-size: 18px; box-shadow: 2px 2px 3px #232323;" id="btn_novo_end">Novo Endereço</button>

            </div>
            <div class="modal fade" id="modalEnd">
             <form id="form_novo_end" method="POST">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header" style="background: linear-gradient(45deg, #68319b , #A491BA);">
                            <h4 class="modal-title">Novo Endereço / SEDE</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                        
                          <!-- Modal body -->
                          <div class="modal-body">

                           
                               <span class="input input--yoko">
                    <input class="input__field input__field--yoko" type="text" id="nome" required="required" name="nome_txt" />
                    <label class="input__label input__label--yoko" for="nome">
                        <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">Nome</span>
                    </label>
                </span>

                                 <span class="input input--yoko">
                    <input class="input__field input__field--yoko" type="text" id="cep_novo" required="required" name="cep_txt" />
                                <label class="input__label input__label--yoko" for="cep_novo">
                                 <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">CEP</span>
                                 </label>
                                <span id="not_cep"></span><br>
                            </span>

                                <div id="novo_part2" style="display: none">
                                    <span class="input input--yoko">
                    <input class="input__field input__field--yoko " style="background: #CFC1DE;opacity: 1" type="text" id="rua" required="required" name="rua_txt" />
                    <label class="input__label input__label--yoko" for="rua">
                        <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">Rua</span>
                    </label>
                </span>

                                <span class="input input--yoko">
                    <input class="input__field input__field--yoko" style="background: #CFC1DE;opacity: 1" type="text" id="cid" required="required" name="cid_txt" />
                    <label class="input__label input__label--yoko" for="cid">
                        <span class="input__label-content input__label-content--yoko " style="font-size: 17px; color: #232323;">Cidade</span>
                    </label>
                </span>

                                <span class="input input--yoko">
                    <input class="input__field input__field--yoko" style="background: #CFC1DE;opacity: 1" type="text" id="est" required="required" name="est_txt" />
                    <label class="input__label input__label--yoko" for="est">
                        <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">Estado</span>
                    </label>
                </span>

                               <span class="input input--yoko">
                    <input class="input__field input__field--yoko" type="text" id="num" required="required" name="num_txt" />
                    <label class="input__label input__label--yoko" for="num">
                        <span class="input__label-content input__label-content--yoko " style="font-size: 17px; color: #232323;">N°</span>
                    </label>
                </span>

                                    <input type="submit" name="enviar_novo_end" value="Confirmar" class="btn btn-outline-dark" style="font-size: 18px; box-shadow: 2px 2px 3px #232323;" >
                                </div>
                                
                           
                            
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer" style="background: linear-gradient(45deg, #68319b , #A491BA);">
                            <button type="button" id="btn_clear_new" class="btn btn-outline-dark" data-dismiss="modal">Fechar</button>
                          </div>
                
                    </div>

                </div>
                </form>
            </div>
        </div>

        <div id="av_conteudo" class="tab-pane in active">
            <?php 
                include($av_status);

                if($av_status == "html/av_create.php"){ ?>
                <script type="text/javascript">
                    valor = 1;
                </script>

                <?php } ?>

        </div>

        
        <div id="pagina4" class="tab-pane fade">
          <div class="container">
            <center>
            <h1>Funções</h1>
          </center>
            <div class="row d-flex justify-content-center">
              <section class="section section--menu" id="Sebastian">
                <span class="link-copy"></span>
                <nav class="menu menu--sebastian">
                  <ul class="menu__list">
                    <li class="menu__item menu__item--current active"><a data-toggle="tab" href="#funcoes" class="menu__link" style="font-size: 18px;">Funções</a></li>
                    <li class="menu__item"><a data-toggle="tab" href="#adicionar" class="menu__link" style="font-size: 18px;">Adicionar</a></li>
                    <li class="menu__item"><a data-toggle="tab" href="#premium" class="menu__link" style="font-size: 18px;">Premium</a></li>
                    <li class="menu__item"><a data-toggle="tab" href="#suporte" class="menu__link" style="font-size: 18px;">Suporte</a></li>
                  </ul>
                </nav>
              </section>
              <!-- <div class="funcao tab-pane in active" id="funcoes" style="width: 100%; background-color: #FFFFFF; height: 800px; border-radius: 10px; box-shadow: 3px 3px 9px #999">
              
            </div> -->
             
            <div class="funcao tab-pane" id="adicionar" style="width: 100%; background-color: #FFFFFF; height: 800px; border-radius: 10px; box-shadow: 3px 3px 9px #999">


                <div class="fun_lista" style="width: 30%; background-color: #9A89D1; height: 120px; border-radius: 10px; box-shadow: 3px 3px 9px #232323; margin-left:5%; margin-top: 5%; display:flex; align-items: center;">
                <img src="<?php echo BASE_URL; ?>assets/images/notepad_bloc_notes_15548.png" style="margin-left: 5px;">
                  <h3 style="margin-left: 10px;">Lembrete</h3>
                  <a class="md-trigger" data-modal="modal-9"><img src="<?php echo BASE_URL; ?>assets/images/plus_icon-icons.com_61187.png" style=""></a>
              </div>

                  <div class="fun_lista" style="width: 30%; background-color: #9A89D1; height: 120px; border-radius: 10px; box-shadow: 3px 3px 9px #232323;
                   display:flex; align-items: center; margin-top: -117px; margin-left: 65%;">
                <img src="<?php echo BASE_URL; ?>assets/images/calendar-clock-icon_34472.png" style="margin-left: 5px;">
                  <h3 style="margin-left: 10px;">Agendamento</h3>
                  <a class="md-trigger" data-modal="modal-9"><img src="<?php echo BASE_URL; ?>assets/images/plus_icon-icons.com_61187.png" style=""></a>
              </div>

            </div>

              <div class="md-modal md-effect-9" id="modal-9">
      <div class="md-content">
        <h3>Lembrete</h3>
        <div>
          <p>Vai ter uma img na esquerda e na direita uma explicação:</p>
          <ul>  <!-- Conteudo do bd -->
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
          </ul>
          <button class="md-close">Close me!</button>
        </div>
      </div>
    </div>
    <!-- <div class="md-overlay"></div>
            <div class="funcao tab-pane" id="premium" style="width: 100%; background-color: #FFFFFF; height: 800px; border-radius: 10px; box-shadow: 3px 3px 9px #999">

            </div>

            <div class="funcao tab-pane" id="suporte" style="width: 100%; background-color: #FFFFFF; height: 800px; border-radius: 10px; box-shadow: 3px 3px 9px #999">

            </div> -->
          

          </div>
        </div>
      </div>
        <div id="pagina5" class="tab-pane fade">
            pagina 5

        </div>
      <div id="pagina6" class="tab-pane fade"><div style="padding-left:40px;padding-right: 40px">
            <table class="table table-dark table-striped" >
            <thead>
              <tr>
                <th>Nome</th>
                <th>CEP</th>
                <th>telefone</th>
                <th>descricao</th>
                <th>data</th>
                <th>horario</th>
                <th>acoes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>13238-094</td>
                <td>(11) 912331234</td>
                <td>21/08/2018</td>
                <th>15h</th>
                <td>Preciso de tal coisa bla bla bla bla loren ipsun</td>
                 <th><button type="button" class="btn btn-success">Aceitar</button><button type="button" class="btn btn-danger">Negar</button></th>
              </tr>
              <tr>
                <td>Marie</td>
                <td>13238-094</td>
                <td>(11) 912331234</td>
                <td>28/08/2018</td>
                <th>15h</th>
                <td>Preciso de tal coisa bla bla bla bla loren ipsun</td>
                 <th><button type="button" class="btn btn-success">Aceitar</button><button type="button" class="btn btn-danger">Negar</button></th>
              </tr>
              <tr>
                <td>User1</td>
                <td>13238-094</td>
                <td>(11) 912331234</td>
                <td>19/10/2018</td>
                <th>13h</th>
                <td>Preciso de tal coisa bla bla bla bla loren ipsun</td>
                 <th><button type="button" class="btn btn-success">Aceitar</button><button type="button" class="btn btn-danger">Negar</button></th>
              </tr>
            </tbody>
        </table></div>

        </div>
  

</div>
</div>



        
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/empresario.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/classie.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/clipboard.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/cssParser.js"></script>
    
    <script src="<?php echo BASE_URL; ?>assets/js/modalEffects.js"></script>


<script>
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();


            (function() {
      [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
        var menuItems = menu.querySelectorAll('.menu__link'),
          setCurrent = function(ev) {
            ev.preventDefault();
            var item = ev.target.parentNode; // li
            // return if already current
            if (classie.has(item, 'menu__item--current')) {
              return false;
            }
            // remove current
            classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
            // set current
            classie.add(item, 'menu__item--current');
          };
        [].slice.call(menuItems).forEach(function(el) {
          el.addEventListener('click', setCurrent);
        });
      });
      [].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
        link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
        new Clipboard(link);
        link.addEventListener('click', function() {
          classie.add(link, 'link-copy--animate');
          setTimeout(function() {
            classie.remove(link, 'link-copy--animate');
          }, 300);
        });
      });
    })(window);


    var polyfilter_scriptpath = '/js/';
        </script>
</body>
</html>