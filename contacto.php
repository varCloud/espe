<!DOCTYPE HTML>
<html>
<?php
include './includes/Conexion.php';
session_start();
//$_SESSION["pag"]="contacto.php";
?>
<head>
    <title>E ESPE - Contacto</title>
    <!-- meta info -->
    <link rel="shortcut icon" href="img/favicon_espe.png" type="image/x-icon" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="E espe" />
        <meta name="description" content="E espe">
        <meta name="author" content="The web cookie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="css/boostrap.css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="css/font_awesome.css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="css/mystyles.css">


</head>

<body class="boxed" style="background-image: url(img/textures/wood-1.jpg)">
<div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

    <div class="global-wrap">


        <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
        <div class="top-main-area text-center">
               <div class="container" style="width: 100%;margin: 0;padding: 0">
                    <a href="index.php" class="logo mt5">
                        <!--<img src="img/logo-small-dark.png" alt="Image Alternative text" title="Image Title" />-->
                        <?php
                        include './includes/files/logo.php';
                        ?>
                    </a>
                </div>
            </div>
            <?php
            include './includes/files/header.php';
            ?>

        <!-- LOGIN REGISTER LINKS CONTENT -->
        

     


   

        <!-- SEARCH AREA -->
       
        <div class="gap"></div>


        <!-- //////////////////////////////////
	//////////////END MAIN HEADER////////// 
	////////////////////////////////////-->


        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->



        <div class="container">
            <div class="row row-wrap">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30049.66483626599!2d-101.20204826812302!3d19.703762287218996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1421299760032" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div>
                <div class="col-md-3">
                    <form name="contactForm" id="contact-form" class="contact-form" method="post" action="enviarCorreo.php">
                        <fieldset>
                            <div class="form-group">
                                <label>Nombre</label>
                                <div class="bg-warning form-alert" id="form-alert-name">Por favor ingresa tu nombre</div>
                                <input class="form-control" id="name" name="nombre" type="text" placeholder="Ingresa tu nombre aqui" />
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <div class="bg-warning form-alert" id="form-alert-email">Por favor ingresa tu e-mail</div>
                                <input class="form-control" id="email" name="mail" type="text" placeholder="Tu e-mail" />
                            </div>
                            <div class="form-group">
                                <label>Teléfono</label>
                                <div class="bg-warning form-alert" id="form-alert-email">Por favor ingresa tu teléfono</div>
                                <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Tu tel o cel" />
                            </div>
                            <div class="form-group">
                                <label>Mensaje</label>
                                <div class="bg-warning form-alert" id="form-alert-message">Por favor ingresa tu mensaje</div>
                                <textarea class="form-control" id="message" name="mensaje" placeholder="Tu mensaje"></textarea>
                            </div>
                           
                            <button  type="submit" class="btn btn-primary">Enviar mensaje</button>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-3">
                    <h5>Atendemos tus pedidos en:</h5>
                    <ul class="list">
                        <li><i class="icon-envelope"></i> Correo: <a href="#">contacto@eespe.com.mx</a>
                        <li><i class="icon-phone"></i> Cel: (443) 185 60 85</li>
                        <li><i class="icon-map-marker"></i> Facebook: E Espe</li>
                        <li><i class="icon-map-marker"></i> Horarios: 9 a 2 y 4 a 7 de Lunes a Viernes.</li>
                        <li><i class="icon-map-marker"></i> Morelia, Michoacán, México.</li>
                    </ul>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>


        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->

		<?php
            include './includes/files/footerMenu.php';
        ?>

        <!-- //////////////////////////////////
	//////////////MAIN FOOTER////////////// 
	////////////////////////////////////-->

    </div>
       <?php
    include './includes/files/footer.php';
       ?>
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER///////// 
	////////////////////////////////////-->



        <!-- Scripts queries -->
        <script src="js/jquery.js"></script>
        <script src="js/evtCarrito.js"></script>
        <script src="js/boostrap.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/flexnav.min.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/tweet.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/fitvids.min.js"></script>
        <script src="js/mail.min.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/masonry.js"></script>
        <script src="js/nicescroll.js"></script>

        <!-- Custom scripts -->
        <script src="js/custom.js"></script>
</body>

</html>
