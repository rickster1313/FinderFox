<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href="<?php echo BASE_URL; ?>assets/css/font-face.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/w3.css">
        
        <!-- Bootstrap CSS-->
        <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="<?php echo BASE_URL; ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="<?php echo BASE_URL; ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?php echo BASE_URL; ?>assets/css/theme.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
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
                width: 60%; 
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
            .pessoa:hover{
                cursor:pointer;
            }
        </style>


    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="<?php echo BASE_URL; ?>assets/images/logo.png" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile nav nav-tabs">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="active">
                                <a data-toggle="tab" href="#home">
                                    <i class="fas fa-tachometer-alt"></i>Dashboardgg</a>

                            </li>
                            <li>
                                <a data-toggle="tab" href="#pag2">
                                    <i class="fas fa-chart-bar"></i>Chat</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>/login/deslogar"> Sair</a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar nav nav-tabs">
                        <ul class="list-unstyled navbar__list">
                            <li class="active" >
                                <a data-toggle="tab" href="#home">
                                    <i class="fas fa-tachometer-alt"></i>Dashboardgg</a>

                            </li>
                            <li>
                                <a data-toggle="tab" href="#pag2">
                                    <i class="fas fa-chart-bar"></i>Chat</a>
                            </li>



                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop d-none d-lg-block">

                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <div class=" au-input--xl" /></div>
                            <div class="header-button">
                                <a href="<?php echo BASE_URL; ?>/login/deslogar"><button type="button" class="btn btn-outline-danger" style="width: 100px;border: red 1px solid ">Sair</button></a>
                            </div>
                        </div>
                    </div>

                </header>
                <!-- HEADER DESKTOP-->



                <!-- MAIN CONTENT-->
                <div class="main-content"> 
                    <div class="section__content section__content--p30">

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                Teste
                            </div>

                            <div id="pag2" class="tab-pane fade">
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
                                                                <input type="text" id="myInput" class="search-bar"  placeholder="Pesquise" >
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
                                                                <input type="text" id="caixa_msg" autocomplete="off" style="padding-right:50px" class="write_msg" placeholder="Envie uma " />

                                                                <button id="enviarMsg" class="msg_send_btn" co type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>




                                        </div></div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="<?php echo BASE_URL; ?>assets/vendor/jquery-3.2.1.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/usuario.js"></script>
        <!-- Bootstrap JS-->
        <script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="<?php echo BASE_URL; ?>assets/vendor/slick/slick.min.js">
        </script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/wow/wow.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/animsition/animsition.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="<?php echo BASE_URL; ?>assets/js/templa_adm.js"></script>

    </body>

</html>
<!-- end document-->
