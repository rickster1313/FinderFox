<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title><?php echo $nome_av; ?> - FinderFox</title>

        <!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
        -->
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Owl carousel -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/owl.carousel.min.css">
        <!-- Main css -->
        <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <style>


            .carousel-inner{
                width: 100%;
                height: 100%;
            }

            .conteudo{
                width: 100%;
                height: 1200px;
                border: solid 2px;
                border-radius: 50px;
            }

        </style>

    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="30">
        <!-- Nav Menu -->

        <div class="nav-menu fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-dark navbar-expand-lg">
                            <a class="navbar-brand"><img src="<?php echo BASE_URL . 'assets/images/AV/' . $logo_av; ?>" class="img-fluid" alt="logo" style="height: 50px" ></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a></li>
                                    <?php if ($part1_active == "yes" || $part2_active == "yes") { ?>
                                        <li class="nav-item"> <a class="nav-link" href="#features">SOBRE</a> </li>
                                    <?php } ?>
                                    <?php if ($galery_active == "yes") { ?>
                                        <li class="nav-item"> <a class="nav-link" href="#gallery">GALERIA</a> </li>
                                    <?php } ?>
                                    <li class="nav-item"> <a class="nav-link" href="#contact">CONTATO</a> </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <header class="bg-gradient" id="home">
            <div class="container mt-5">
                <h1><?php echo $nome_av; ?></h1>
                <p class="tagline"><?php echo $slogan_av; ?></p>
            </div>

            <div class="img-holder mt-3"><?php if ($img_home_active == "yes") { ?><img src="<?php echo BASE_URL . "assets/images/AV/" . $img_home; ?>" style="height: 350px" alt="imagem" class="img-fluid"><?php } ?></div>

        </header>

        <div class="client-logos my-5" style="height:50px" id="features">
            <div class="container text-center">

            </div>
        </div>
        <?php if ($part1_active == "yes") { ?>
            <div class="section light-bg"  >


                <div class="container" >

                    <div class="section-title" >
                        <small>SOBRE</small> 
                        <h3><?php echo $part1_title; ?></h3>
                    </div>


                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="card features">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                        <div class="media-body">
                                            <h4 class="card-title"><?php echo $part1_nome1; ?></h4>
                                            <p class="card-text"><?php echo $part1_text1; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card features">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                        <div class="media-body">
                                            <h4 class="card-title"><?php echo $part1_nome2; ?></h4>
                                            <p class="card-text"><?php echo $part1_text2; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card features">
                                <div class="card-body">
                                    <div class="media">
                                        <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                        <div class="media-body">
                                            <h4 class="card-title"><?php echo $part1_nome3; ?></h4>
                                            <p class="card-text"><?php echo $part1_text3; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        <?php } ?>
        <!-- // end .section -->


        <?php if ($part2_active == "yes") { ?>
            <div class="section light-bg">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <ul class="list-unstyled ui-steps">
                                <li class="media">
                                    <div class="circle-icon mr-4">1</div>
                                    <div class="media-body">
                                        <h5><?php echo $part2_nome1; ?></h5>
                                        <p><?php echo $part2_text1; ?> </p>
                                    </div>
                                </li>
                                <li class="media my-4">
                                    <div class="circle-icon mr-4">2</div>
                                    <div class="media-body">
                                        <h5><?php echo $part2_nome2; ?></h5>
                                        <p><?php echo $part2_text2; ?> </p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="circle-icon mr-4">3</div>
                                    <div class="media-body">
                                        <h5><?php echo $part2_nome3; ?></h5>
                                        <p><?php echo $part2_text3; ?> </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <?php if (!empty($part2_img)) { ?>
                                <img src="<?php echo BASE_URL . "assets/images/AV/" . $part2_img; ?>" alt="imagem" class="img-fluid">
                            <?php } ?>
                        </div>

                    </div>

                </div>

            </div>
        <?php } ?>
        <!-- // end .section -->

        <!-- PARTE 3 
            <div class="section">
                <div class="container">
                    <div class="section-title">
                        <small>TESTIMONIALS</small>
                        <h3>What our Customers Says</h3>
                    </div>
        
                    <div class="testimonials owl-carousel">
                        <div class="testimonials-single">
                            <img src="images/client.png" alt="client" class="client-img">
                            <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                            <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                            <p class="text-primary">United States</p>
                        </div>
                        <div class="testimonials-single">
                            <img src="images/client.png" alt="client" class="client-img">
                            <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                            <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                            <p class="text-primary">United States</p>
                        </div>
                        <div class="testimonials-single">
                            <img src="images/client.png" alt="client" class="client-img">
                            <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                            <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                            <p class="text-primary">United States</p>
                        </div>
                    </div>
        
                </div>
        
            </div>
        // fim PARTE 3 -->

        <?php if ($galery_active == "yes") { ?>
            <div class="section light-bg" id="gallery">
                <div class="container">
                    <div class="section-title">
                        <small>GALERIA</small>
                        <h3><?php echo $galery_title; ?></h3>
                    </div>

                    <div class="img-gallery owl-carousel owl-theme">
                        <?php
                        $photos = explode("$!$", $fotos);
                        foreach ($photos as $value) {
                            ?>
                            <img src="<?php echo BASE_URL . 'assets/images/AV/' . $value; ?>" alt="image">
                        <?php } ?>
                    </div>

                </div>

            </div>
        <?php } ?>
        <!-- // end .section -->





        <?php
        $usuariosModel = new usuariosModel();
        $sql = $usuariosModel->getDados($user_id);
        $dadosUser = $sql->fetch();
        ?>
        <div class="section bg-gradient">
            <div class="container">
                <div class="call-to-action">

                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>Contato</h2>
                    <p class="tagline"> </p>
                    <div class="my-4">
                        <?php
                        if (isset($tipos) && !empty($tipos)) {
                            $btns = explode(",", $tipos);
                            $urls = explode("$!$", $tipos_val);
                            foreach ($btns as $key => $value) {
                                ?>
                                <a href="<?php echo $urls[$key]; ?>" class="btn btn-light"><img src="<?php echo BASE_URL; ?>assets/images/<?php echo $value; ?>-icon.png" alt="icon"> <?php
                                    if ($value == "youtube") {
                                        echo "YouTube";
                                    } elseif ($value == "face") {
                                        echo "Facebook";
                                    } elseif ($value == "twitter") {
                                        echo "Twitter";
                                    } else {
                                        echo "Instagram";
                                    }
                                    ?></a>
                                <?php
                            }
                        } else {
                            ?>
                            <a class="btn btn-success"> Sem redes sociais</a>
                        <?php } ?>
                    </div>
                    <p class="text-primary"><small><i>Acesse também nossas redes sociais. </i></small></p>
                </div>
            </div>

        </div>
        <!-- // end .section -->

        <div class="light-bg py-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <p class="mb-2"> <span class="ti-location-pin mr-2"></span> <strong>Sedes e Endereços</strong></p>
                        <?php
                        $enderecosModel = new enderecosModel();
                        $sql = $enderecosModel->getEnderecos($user_id);
                        $enderecos = $sql->fetchAll();
                        foreach ($enderecos as $value) {
                            ?>
                            <p class="mb-2"> <span class="ti-location-pin mr-2"></span> <?php echo $value['rua'] . ' nº ' . $value['numero'] . ', ' . $value['cidade'] . ' - ' . $value['estado']; ?></p>
                        <?php } ?>
                        <div class="d-block d-sm-inline-block">
                            <p class="mb-0">
                                <span class="ti-headphone-alt mr-2"></span> <a href="<?php echo $dadosUser['telefone']; ?>"><?php echo $dadosUser['telefone']; ?></a>
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="social-icons">
                            <a href="#"><span class="ti-facebook"></span></a>
                            <a href="#"><span class="ti-twitter-alt"></span></a>
                            <a href="#"><span class="ti-instagram"></span></a>
                        </div>
                    </div>
                </div>

                <?php
                $valor = explode(",", $func);
                if (in_array('3', $valor)) {
                    ?>
                    <button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#myModal" style = "position:fixed; bottom: 0px; right:5px;">
                        Mensagem
                    </button>
                <?php }
                ?>

            </div>

        </div>



        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <?php if (isset($_SESSION["nvl_acesso"]) && $_SESSION["nvl_acesso"] == 'usuario') { ?>
                            <form id="chat">
                                <div class = "form-group">
                                    <label for = "comment">Mensagem:</label>
                                    <textarea class = "form-control" rows = "6" id = "msg" ></textarea>
                                </div>
                                <input type="hidden" id="user_av" value="<?php echo $user_id; ?>">
                                <input type="hidden" id="user_logado" value="<?php echo $_SESSION['id']; ?>">
                                <button type = "submit" id="enviar_msg" class = "btn btn-primary">Enviar</button>
                            </form>
                            <?php } else {
                            ?>
                            <div class = "alert alert-warning">
                                <strong>Aviso!</strong> Para mandar menssagem, precisa estar logado.
                                <a href = "<?php echo BASE_URL; ?>login" class = "alert-link"><button>Logar</button></a>
                            </div>
                        <?php }
                        ?>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- // end .section -->
        <footer class="my-5 text-center">

            <p class="mb-2"><small>COPYRIGHT © 2018. TODOS OS DIREITOS RESERVADOS</small></p>

        </footer>
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>
        <!-- Plugins JS -->
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/owl.carousel.min.js"></script>
        <!-- Custom JS -->
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/script.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/av.js"></script>
    </body>
</html>




</html>