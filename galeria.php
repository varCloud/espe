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
        <style>
            
            
            .col-md-3{
                float:none !important;
                display: inline-block;
                margin-left: 6%;
                padding: 0 !important;
            }
            
            
            @-moz-keyframes fadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
            }
            @-webkit-keyframes fadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
            }


            @-o-keyframes fadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
            }

            @keyframes fadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
            }

            .mfp-open .mfp-figure {
                -webkit-animation-name: fadeIn;
                -moz-animation-name: fadeIn;
                -o-animation-name: fadeIn;
                animation-name: fadeIn;
                -webkit-animation-duration: 1.5s;
                -moz-animation-duration: 1.5s;
                -ms-animation-duration: 1.5s;
                -o-animation-duration: 1.5s;
                animation-duration: 1.5s;
                -webkit-animation-fill-mode: both;
                -moz-animation-fill-mode: both;
                -ms-animation-fill-mode: both;
                -o-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility:    hidden;
                -ms-backface-visibility:     hidden;
            }
        </style>

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
                    <div class="col-md-12" >
                        <h3 style="text-align: center">Galeria</h3>
                        <div class="row" id="popup-gallery">

                            <?php
                            $sql = new MySQL();
                            $res = $sql->consulta("SELECT * FROM galeria");
                            $contador = 0;
                            while ($row = $sql->fetch_array($res)) {
                                ?>
                            <div class="col-md-3" style="margin-top: 20px">
                                    <!-- HOVER IMAGE -->
                                    <a class="hover-img popup-gallery-image" href="panel/<?= $row["foto"] ?>" data-effect="mfp-3d-unfold">
                                        <img src="panel/<?= $row["foto"] ?>" alt="Image Alternative text" title=""  /><i class="fa fa-resize-full hover-icon"></i>
                                    </a>
                                </div>   
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
            </div>


            <!-- //////////////////////////////////
            //////////////END PAGE CONTENT///////// 
            ////////////////////////////////////-->



            <!-- //////////////////////////////////
            //////////////MAIN FOOTER////////////// 
            ////////////////////////////////////-->
			        <?php
        include './includes/files/footer.php';
        ?>
        </div>

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
