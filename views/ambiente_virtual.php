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
                        <a class="navbar-brand" href="index.html"><img src="<?php echo BASE_URL.'assets/images/AV/'.$logo_av; ?>" class="img-fluid" alt="logo" style="height: 50px" ></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a></li>
                                <li class="nav-item"> <a class="nav-link" href="#features">SOBRE</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALERIA</a> </li>
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
        <div class="img-holder mt-3"><img src="<?php echo BASE_URL.'assets/images/simbolo-imagen.jpg'; ?>" style="height: 350px" alt="phone" class="img-fluid"></div>
    </header>

    <div class="client-logos my-5" style="height:50px">
        <div class="container text-center">
            
        </div>
    </div>

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>HIGHLIGHTS</small>
                <h3>Features you love</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
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
                                    <h4 class="card-title">Customize</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
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
                                    <h4 class="card-title">Secure</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->



    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Create an Account</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Share with friends</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem eveniet</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Enjoy your life</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="images/iphonex.png" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->


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
    <!-- // end .section -->


    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALLERY</small>
                <h3>Fotos</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="images/screen1.jpg" alt="image">
                <img src="images/screen2.jpg" alt="image">
                <img src="images/screen3.jpg" alt="image">
                <img src="images/screen1.jpg" alt="image">
            </div>

        </div>

    </div>
    <!-- // end .section -->






    <div class="section bg-gradient">
        <div class="container">
            <div class="call-to-action">

                <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                <h2>Download Anywhere</h2>
                <p class="tagline">Available for all major mobile and desktop platforms. Rapidiously visualize optimal ROI rather than enterprise-wide methods of empowerment. </p>
                <div class="my-4">

                    <a href="#" class="btn btn-light"><img src="<?php echo BASE_URL; ?>assets/images/appleicon.png" alt="icon"> App Store</a>
                    <a href="#" class="btn btn-light"><img src="<?php echo BASE_URL; ?>assets/images/playicon.png" alt="icon"> Google play</a>
                </div>
                <p class="text-primary"><small><i>*Works on iOS 10.0.5+, Android Kitkat and above. </i></small></p>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> 1485 Pacific St, Brooklyn, NY 11216 USA</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@mobileapp.com">support@mobileapp.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800">518-3636-2800</a>
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

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2"><small>COPYRIGHT © 2017. ALL RIGHTS RESERVED. MOBAPP TEMPLATE BY <a href="https://colorlib.com">COLORLIB</a></small></p>

        <small>
            <a href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
    </footer>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/script.js"></script>
</body>
</html>




</html>