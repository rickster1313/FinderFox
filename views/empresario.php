
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <title>Empresário</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/w3.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/set2.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/set1.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component1.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style2.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/estilo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/estilo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/owl.carousel.min.css">
        <link type="text/css" href="<?php echo BASE_URL; ?>assets/css/animate.min.css" rel="stylesheet"/>
        <link type="text/css" href="<?php echo BASE_URL; ?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="<?php echo BASE_URL; ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">


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
                background-color: #fff;
                font-family: 'Bree Serif', serif;
                width: 100%;
            }

            html{
                width: 100%;
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



            .esquerda{
                background: linear-gradient(45deg, #68319B, #361850);
                display: flex;
                align-items: center;
                justify-content: center;
                height: 800px;
            }

            .direita{
                background: #fff; 
                display: flex;
                align-items: center;
                justify-content: center;
                height: 800px;
            }

            @media only screen and (min-width: 780px){

            }
            @media only screen and (max-width: 780px){

            }
            .main{
                position: absolute;
                height: 100%;
                width: 100%;
            }

            input[type=text]:focus{
                box-shadow: none;
                border-color: #fff;
            }
            input[type=email]:focus{
                box-shadow: none;
                border-color: #fff;
            }
            input[type=password]:focus{
                box-shadow: none;
                border-color: #fff;
            }
            textarea[type=text]:focus{
                box-shadow: none;
                border-color: #fff;
            }
            input:select{
                box-shadow: none;
                border-color: #fff;
            }

            .nav-item{
                width: 245px;
            }

            .nav-item:hover{
                width: 245px;
            }

            .nav-tabs:hover{
                width: 245px;
            }

            .nav-tabs{
                width: 245px;
            }

            .watch {
                display: inline-block;
                height: 200px;
                position: relative;
                width: 200px;
            }

            .watch:hover::after {
                visibility: visible
            }

            .watch img {
                width: 100%
            }

            .watch::after {
                background: url("<?php echo BASE_URL; ?>"assets/images/switch-camera.png) no-repeat;
                background-position: 45% 55%;
                content: '';
                display: block;
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                visibility: hidden;
                width: 100%
            }
            .container2{max-width:1170px; margin:auto; }
            img{ max-width:100%;}
            .inbox_people {
                background: #f8f8f8 none repeat scroll 0 0;
                float: left;
                overflow: hidden;
                width: 40%; border-right:1px solid #c4c4c4;
            }
            .inbox_msg {
                border: 1px solid #c4c4c4;
                clear: both;
                overflow: hidden;
            }
            .top_spac{ margin: 20px 0 0;}


            .recent_heading {float: left; width:40%;}
            .srch_bar {
                display: inline-block;
                text-align: right;
                width: 60%; padding:
            }
            .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

            .recent_heading h4 {
                color: #05728f;
                font-size: 21px;
                margin: auto;
            }
            .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
            .srch_bar .input-group-addon button {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border: medium none;
                padding: 0;
                color: #707070;
                font-size: 18px;
            }
            .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

            .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
            .chat_ib h5 span{ font-size:13px; float:right;}
            .chat_ib p{ font-size:14px; color:#989898; margin:auto;}
            .chat_img {
                float: left;
                width: 11%;
            }
            .chat_ib {
                float: left;
                padding: 0 0 0 15px;
                width: 88%;
            }
            .chat_people{ overflow:hidden; clear:both;}
            .chat_list {
                border-bottom: 1px solid #c4c4c4;
                margin: 0;
                padding: 18px 16px 10px;
            }
            .inbox_chat { height: 550px; overflow-y: scroll;}

            .active_chat{ background:#ebebeb;}

            .incoming_msg_img {
                display: inline-block;
                width: 6%;
            }
            .received_msg {
                display: inline-block;
                padding: 0 0 0 10px;
                vertical-align: top;
                width: 92%;
            }
            .received_withd_msg p {
                background: #ebebeb none repeat scroll 0 0;
                border-radius: 3px;
                color: #646464;
                font-size: 14px;
                margin: 0;
                padding: 5px 10px 5px 12px;
                width: 100%;
            }
            .time_date {
                color: #747474;
                display: block;
                font-size: 12px;
                margin: 8px 0 0;
            }
            .received_withd_msg { width: 57%;}
            .mesgs {
                float: left;
                padding: 30px 15px 0 25px;
                width: 60%;
            }

            .sent_msg p {
                background: #666 none repeat scroll 0 0;
                border-radius: 3px;
                font-size: 14px;
                margin: 0; color:#fff;
                padding: 5px 10px 5px 12px;
                
            }
            .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
            .sent_msg {
                float: right;
                width: 46%;
            }
            .input_msg_write input {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border: medium none;
                color: #4c4c4c;
                font-size: 15px;
                min-height: 48px;
                width: 100%;
            }

            .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
            .msg_send_btn {
                background: #05728f none repeat scroll 0 0;
                border: medium none;
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
                font-size: 17px;
                height: 33px;
                position: absolute;
                right: 0;
                top: 11px;
                width: 33px;
            }
            .messaging { padding: 0 0 50px 0;}
            .msg_history {
                height: 516px;
                overflow-y: auto;
            }

        </style>

    </head>
    <body>

        <div class="wrapper">
            <div class="sidebar" data-color="purple" data-image="<?php echo BASE_URL; ?>assets/img/sidebar-5.jpg">


                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="#" class="simple-text" >
                            <h3> Empresário </h3>
                            
                                <img src="<?php echo BASE_URL; ?>assets/images/pericles.jpg" id="imagemperf" class="rounded-circle"  alt="Cinque Terre" width="200" height="200">
                            
                        </a>

                        <br>


                        <a href="">  
                        </a>

 

                    </div>

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#menu1" class="nav-link active" data-toggle="tab">
                                <i class="pe-7s-graph3"></i>
                                <p>Estátisticas</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#menu2" data-toggle="tab" class="nav-link">
                                <i class="pe-7s-map-2"></i>
                                <p>Endereços/Sedes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#menu3" data-toggle="tab" class="nav-link">
                                <i class="pe-7s-monitor"></i>
                                <p>Ambiente Virtual</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#menu4" data-toggle="tab" class="nav-link" >
                                <i class="pe-7s-tools"></i>
                                <p>Funções</p>
                            </a>
                        </li>




                        <?php
                        $avsModel = new avsModel();
                        $funcaoModel = new funcaoModel();
                        $sqlFunc = $funcaoModel->getAllactive();
                        $sql = $avsModel->procuraAV($_SESSION['id']);
                        $dadosFunc = $sqlFunc->fetchAll();
                        $dados = $sql->fetch();
                        if ($dados['func'] == "") {
                            $func = array();
                        } else {
                            $func = explode(",", $dados['func']);
                        }


                        foreach ($func as $value) {
                            ?>
                            <li class="nav-item">
                                <a href="#<?php echo $dadosFunc[$value - 1]["href"]; ?>" data-toggle="tab" class="" style="color: #fff;">
                                    <i class="pe-7s-tools"></i>
                                    <p><?php echo $dadosFunc[$value - 1]["nome_func"]; ?></p>
                                </a>
                            </li>
                        <?php } ?>


                        <li class="nav-item">
                            <a href="<?php echo BASE_URL; ?>/login/deslogar" class="nav-link">
                                <i class="pe-7s-home"></i>
                                <p>SAIR</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <div class="main">

                    <div class="content">
                        <div class="container-fluid">
                            <div class="tab-content">

                                <div class="tab-pane fade" id="menu1">
                                    <h1>Olá <?php
                                        $newNome = explode(" ", $nome);
                                        echo strtoupper($newNome[0]);
                                        ?></h1>
                                </div>

                                <div class="tab-pane  fade" id="menu2">
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
                                                    $sql = $retorno->fetchAll();
                                                    foreach ($sql as $result) {
                                                        if ($result['active'] == 'nao') {
                                                            echo "<tr class='table-danger' >";
                                                        } else {
                                                            echo "<tr class='table-success' >";
                                                        }
                                                        ?>

                                                    <td> <strong><?php echo strtoupper($result['nome']); ?></strong></td>
                                                    <td><?php echo $result['rua']; ?></td>
                                                    <td><?php echo $result['cidade']; ?></td>
                                                    <td><?php echo $result['estado']; ?></td>
                                                    <td><input type="text" id="raio<?php echo $result['id_end']; ?>" class="raio" name="raio_txt" placeholder="ex.: 50.2" value="<?php echo $result['raio']; ?>"></td>
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

                                                        <button class="btn-tbl btn btn-outline-warning btn_alt" value="modalAlt<?php echo $result['id_end']; ?>">Alterar</button><br>
                                                        <?php if ($result['active'] == 'nao') { ?>
                                                            <button name="btn_on_off" id="id<?php echo $result['id_end']; ?>" value="ativar" type="button" class="btn btn-success btn-tbl">Ativar</button>
                                                        <?php } else {
                                                            ?>
                                                            <button name="btn_on_off" id="id<?php echo $result['id_end']; ?>" value="desativar" type="button" class="btn btn-danger btn-tbl">Desativar</button>
                                                        <?php }
                                                        ?>
                                                        <?php if ($retorno->rowCount() > 1) { ?>
                                                            <button type="button" class="btn-tbl btn btn-outline-danger btn_del" value="id<?php echo $result['id_end']; ?>">Excluir</button> <?php } else { ?> 
                                                            <button type="button" class="btn-tbl btn btn-outline-danger btn_del" disabled="disabled" title="É obrigatório no mínimo 1 endereço! " value="id<?php echo $result['id_end']; ?>">Excluir</button> <?php } ?>
                                                    </td>
                                                    </tr>

                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php foreach ($sql as $resultAlt) { ?>
                                            <!-- ################# modais de alterar ######################-->
                                            <!-- The Modal -->
                                            <div class="modal fade" id="modalAlt<?php echo $resultAlt['id_end']; ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" style="background-color: #F4EDE8;">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Alterar <strong><?php echo $resultAlt['nome']; ?></strong></h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body" style="display: flex; justify-content: center; ">
                                                            <form id="id<?php echo $resultAlt['id_end']; ?>" name="form_alterar_end" method="POST">


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
                                                                <div class="alt_part2" name ="id<?php echo $resultAlt['id_end']; ?>">


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
                                                                            <span class="input__label-content input__label-content--yoko" style="font-size: 16px;">Alcance em KM(somente números) ou escreva 'global'(para alcance global)</span>
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
                                            <div class="quadradinho bg-danger" >Desativo</div>
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
                                                    <div class="modal-header" style="background: #68319B">
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
                                                                <input class="input__field input__field--yoko " style="background: #5F5F5F;opacity: 1" type="text" id="rua" required="required" name="rua_txt" />
                                                                <label class="input__label input__label--yoko" for="rua">
                                                                    <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">Rua</span>
                                                                </label>
                                                            </span>

                                                            <span class="input input--yoko">
                                                                <input class="input__field input__field--yoko" style="background: #5F5F5F;opacity: 1" type="text" id="cid" required="required" name="cid_txt" />
                                                                <label class="input__label input__label--yoko" for="cid">
                                                                    <span class="input__label-content input__label-content--yoko " style="font-size: 17px; color: #232323;">Cidade</span>
                                                                </label>
                                                            </span>

                                                            <span class="input input--yoko">
                                                                <input class="input__field input__field--yoko" style="background: #5F5F5F;opacity: 1" type="text" id="est" required="required" name="est_txt" />
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
                                                    <div class="modal-footer" style="background: #68319b">
                                                        <button type="button" id="btn_clear_new" class="btn btn-outline-dark" data-dismiss="modal">Fechar</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane container fade" id="menu3">
                                    <?php
                                    include($av_status);

                                    if ($av_status == "html/av_create.php") {
                                        ?>
                                        <script type="text/javascript">
                                            valor = 1;
                                        </script>

                                    <?php } ?>
                                </div>

                                <div class="tab-pane container fade" id="menu4">
                                    <div class="section-title">
                                        <h3>Funções</h3>
                                        <a href="<?php echo BASE_URL; ?>views/template.php">lalalalal</a>
                                    </div>

                                    <div class="img-gallery owl-carousel owl-theme funcoes" style="position: relative;">
                                        <?php
                                        $funcaoModel = new funcaoModel();
                                        $sql2 = $funcaoModel->getAllactive();
                                        $dadosFunc = $sql2->fetchAll();
                                        $AvModel = new avsModel();
                                        $f = $avsModel->procuraAV($_SESSION['id']);
                                        $sql3 = $f->fetch();
                                        if ($sql3['func'] == "") {
                                            $func = array();
                                        } else {
                                            $func = explode(",", $sql3['func']);
                                        }
                                        foreach ($dadosFunc as $value) {
                                            ?>
                                            <div class="funcao1" style="width: 100%; height: 200px; background: #68319B;color: white; border: 1px solid white;">
                                                <center>
                                                    <?php
                                                    echo $value['nome_func'];
                                                    $resposta = false;
                                                    foreach ($func as $valor) {
                                                        if ($valor == $value['id_func']) {
                                                            $resposta = true;
                                                        }
                                                    }



                                                    if ($resposta) {
                                                        ?>

                                                        <button class="dstv_func btn btn-outline-light" value="<?php echo $value['id_func']; ?>" style="position: absolute; top: 80%; left: 65%;">Desativar</button>
                                                    <?php } else { ?>
                                                        <button class="atv_func btn btn-outline-light" value="<?php echo $value['id_func']; ?>" style="position: absolute; top: 80%; left: 73%;">Ativar</button>

                                                    <?php }
                                                    ?>

                                                </center>



                                            </div>
                                        <?php } ?>


                                    </div>
                                </div>
                                <div class="tab-pane container active" id="chat">
                                    <div class="container2">
                                        <div class="messaging">
                                            <div class="inbox_msg">
                                                <div class="inbox_people">
                                                    <div class="headind_srch">
                                                        <div class="recent_heading">
                                                            <h4>Contatos</h4>
                                                        </div>
                                                        <div class="srch_bar">
                                                            <div class="stylish-input-group">
                                                                <input type="text" class="search-bar"  placeholder="Pesquise" >
                                                                <span class="input-group-addon">
                                                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                                </span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="inbox_chat " id="contatos">

                                                        
                                                        <?php include ("views/html/contatos.php"); ?>
               
                                                    </div>
                                                </div>
                                                <div class="mesgs">
                                                    <div class="msg_history " id="mensagens">
                                                        
                                                    </div>
                                                    <div class="type_msg" style="display:none">
                                                        <div class="input_msg_write">
                                                            <form>
                                                            <input type="text" id="caixa_msg" class="write_msg" placeholder="Envie uma " />
                                                            
                                                            <button id="enviarMsg" class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>




                                        </div></div>
                                </div>
                                <div class="tab-pane container fade" id="agendar">
                                    agendamento
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>


            <div class="modal fade" id="modalPerfil">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Meu Perfil</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <center>
        <span class="input input--yoko">
            <input class="input__field input__field--yoko" type="text" id="nome" required="required" name="nome_perfil" autocomplete="off" />
                    <label class="input__label input__label--yoko" for="nome">
                    <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">Nome</span>
                   </label>
        </span>


        <span class="input input--yoko">
            <input class="input__field input__field--yoko" type="text" id="senha" required="required" name="senha_perfil" autocomplete="off" />
                    <label class="input__label input__label--yoko" for="senha">
                    <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">Senha</span>
                    </label>
                    
      </span>

      <span class="input input--yoko">
            <input class="input__field input__field--yoko" type="text" id="confsenha" required="required" name="confsenha_perfil" autocomplete="off" />
                    <label class="input__label input__label--yoko" for="confsenha">
                    <span class="input__label-content input__label-content--yoko" style="font-size: 17px; color: #232323;">Confirmar Senha</span>
                    </label>
                    
      </span>

      <h3>Selecionar nova imagem</h3>

      <img src="<?php BASE_URL;?>assets/images/GogetaFusionRebornDVD.png" class="rounded-circle" width="100">
      <img src="<?php BASE_URL;?>assets/images/GogetaFusionRebornDVD.png" class="rounded-circle" width="100"  >
      <img src="<?php BASE_URL;?>assets/images/GogetaFusionRebornDVD.png" class="rounded-circle" width="100">
      <img src="<?php BASE_URL;?>assets/images/GogetaFusionRebornDVD.png" class="rounded-circle" width="100">

  </center>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark">ALTERAR</button>
      </div>

    </div>
  </div>
</div>





            <!--   Core JS Files   -->
            
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>        
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/empresario.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/classie.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/clipboard.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/owl.carousel.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/cssParser.js"></script>
            <script src="<?php echo BASE_URL; ?>assets/js/modalEffects.js"></script>

            <script>
                                        (function () {
                                            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                                            if (!String.prototype.trim) {
                                                (function () {
                                                    // Make sure we trim BOM and NBSP
                                                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                                                    String.prototype.trim = function () {
                                                        return this.replace(rtrim, '');
                                                    };
                                                })();
                                            }

                                            [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
                                                // in case the input is already filled..
                                                if (inputEl.value.trim() !== '') {
                                                    classie.add(inputEl.parentNode, 'input--filled');
                                                }

                                                // events:
                                                inputEl.addEventListener('focus', onInputFocus);
                                                inputEl.addEventListener('blur', onInputBlur);
                                            });

                                            function onInputFocus(ev) {
                                                classie.add(ev.target.parentNode, 'input--filled');
                                            }

                                            function onInputBlur(ev) {
                                                if (ev.target.value.trim() === '') {
                                                    classie.remove(ev.target.parentNode, 'input--filled');
                                                }
                                            }
                                        })();


                                        (function () {
                                            [].slice.call(document.querySelectorAll('.menu')).forEach(function (menu) {
                                                var menuItems = menu.querySelectorAll('.menu__link'),
                                                        setCurrent = function (ev) {
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
                                                [].slice.call(menuItems).forEach(function (el) {
                                                    el.addEventListener('click', setCurrent);
                                                });
                                            });
                                            [].slice.call(document.querySelectorAll('.link-copy')).forEach(function (link) {
                                                link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
                                                new Clipboard(link);
                                                link.addEventListener('click', function () {
                                                    classie.add(link, 'link-copy--animate');
                                                    setTimeout(function () {
                                                        classie.remove(link, 'link-copy--animate');
                                                    }, 300);
                                                });
                                            });
                                        })(window);


                                        var polyfilter_scriptpath = '/js/';
            </script>

            <script type="text/javascript">
                $j(document).ready(function () {

                    $j(".funcoes").owlCarousel();

                });
            </script>

            <script>
$j(document).ready(function(){
    $j("#imagemperf").click(function(){
        $j("#modalPerfil").modal();
    });
});
</script>





    </body>
</html>


