<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Empresário</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>assets/css/animate.min.css" rel="stylesheet"/>
    <link href="<?php echo BASE_URL; ?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo BASE_URL; ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/owl.carousel.min.css">

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

             
        </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo BASE_URL; ?>assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                   <h3> Empresário </h3>

                    <img src="<?php echo BASE_URL; ?>assets/images/goku.jpg" class="rounded-circle" alt="Cinque Terre" width="200" height="200">
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
                    <a href="#menu4" data-toggle="tab" class="nav-link">
                        <i class="pe-7s-tools"></i>
                        <p>Gerenciar Funções</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Inicio</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main">
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                        <div class="tab-content">
                                <div class="tab-pane active" id="menu1" style="">
                                    <h1>Olá <?php
                            $newNome = explode(" ", $nome);
                            echo strtoupper($newNome[0]);
                            ?></h1>
                                </div>

                                <div class="tab-pane fade" id="menu2">
                                    MENU 2
                                </div>

                                <div class="tab-pane fade" id="menu3">
                            
                                     <?php
                        include($av_status);

                        if ($av_status == "html/av_create.php") {
                            ?>
                            <script type="text/javascript">
                                valor = 1;
                            </script>

                        <?php } ?>
                                    
                                </div>

                                <div class="tab-pane fade" id="menu4">
                                    <div class="container">
                            <div class="section-title">
                                <h3>Funções</h3>
                                <a href="<?php echo BASE_URL; ?>views/template.php">lalalalal</a>
                            </div>

                            <div class="img-gallery owl-carousel owl-theme funcoes">
                                <?php 
                                    $funcaoModel = new funcaoModel();
                                    $sql2 = $funcaoModel->getAllactive();
                                    $dadosFunc = $sql2  ->fetchAll();
                                    foreach ($dadosFunc as $value) {
                                ?>
                                <div class="funcao1" style="width: 100%; height: 200px; background: #333;color: white"><?php echo $value['nome_func']; ?></div>
                                    <?php } ?>


                            </div>

                        </div>

                                </div>
                        </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/chartist.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/demo.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/empresario.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/classie.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/clipboard.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/cssParser.js"></script>
    
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

</html>
