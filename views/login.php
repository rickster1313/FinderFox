<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/util-login.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/main-login.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" type="image/x-icon"/>

        <style type="text/css">
            body{
                font-family: 'Bree Serif', serif;

            }

            .msg-deslogado{
                display: block;
                position: absolute;
                width: 290px;
                top: 15%;
            }

            @font-face {

                font-family: "BPreplayBold";
                src: url("assets/fonts/BPreplayBold.otf") format("opentype");

            }


            .replay-font{
                font-family: "BPreplayBold";
                font-size: 25px;  
            }

            @font-face {

                font-family: "Champagne & Limousines Bold";
                src: url("assets/fonts/Champagne & Limousines Bold.ttf") format("truetype");

            }

            .film-font{
                font-family: "Champagne & Limousines Bold";
                font-size: 20px;  
            }  
        </style>



    </head>
    <body>




        <div class="limiter">



            <div class="container-login100">
                <a href="<?php echo BASE_URL; ?>">
                    <img src="<?php echo BASE_URL; ?>assets/images/seta.png" style="width: 40px;" class="float-right">
                </a>
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?php echo BASE_URL; ?>assets/images/finderlogopng2.png" alt="IMG">
                    </div>

                    <form method="POST" action="<?php echo BASE_URL ?>login/valida" name="login" class="login100-form validate-form">
                        <div class="msg-deslogado">
                            <?php
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            ?>
                        </div>
                        <span class="login100-form-title film-font" style="font-size: 28px;">
                            BEM-VINDO
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="email_txt" placeholder="Email" autocomplete="off">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="senha_txt" placeholder="Senha">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn film-font" type="submit" name="enviar_login">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1 film-font">
                                Esqueceu
                            </span>
                            <a class="txt2 film-font" href="#">
                                Email / Senha?
                            </a>
                        </div>

                        <div class="text-center p-t-136">
                            <a class="txt2 film-font" href="<?php echo BASE_URL; ?>/cadastro">
                                Crie sua conta
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/vendor/tilt/tilt.jquery.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/main-login.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>

    </body>
</html>