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
                                    <i class="fas fa-chart-bar"></i>Charts</a>
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
                                    <i class="fas fa-chart-bar"></i>Charts</a>
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
                                troios
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
