<!DOCTYPE HTML>
<html>
    <?php
    session_start();
    $boolean = false;
    if (!isset($_SESSION["id_temp"])) {
        $_SESSION["id_temp"] = session_id();

        $boolean = true;
    }
//    $_SESSION["pag"]="index.php";
    include './includes/Conexion.php';
    ?>
    <head>
        <title>E ESPE - Inicio</title>
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


            <!-- TOP AREA -->
            <div class="top-area">
                <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true"   data-nav="false">
                    <?php
                    $sql = new MySQL();
                    $res = $sql->consulta("SELECT * FROM fotos_banner");
                    while ($row = $sql->fetch_array($res)) {
                        ?>
                        <div>
                            <div class="bg-holder">
                                <img src="panel/<?= $row["foto_banner"] ?>" alt="" title="" style="height: 480px; width:100%" />
                                <!--<div class="bg-mask"></div>-->
                                <div class="bg-front vert-center text-white text-center">
                                    <h2 class="text-hero"><?= $row["texto_principal"] ?>"</h2>
                                    <p class="text-bigger"><?= $row["texto_secundario"] ?>"</p>
                                    <!--<p class="text-hero">Texto banner 1</p><a class="btn btn-lg btn-ghost btn-white btn-lg" href="#">Ver</a>-->
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!-- END TOP AREA -->

            <!-- SEARCH AREA -->
            <form class="search-area form-group">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </form>
            <!-- END SEARCH AREA -->

            <div class="gap"></div>
            <div class="row">
                <div class="col-md-3" style="margin-left: 10px">
                    <aside class="sidebar-left"><br />
                        <h3 class="mb20 text-center">Categorías</h3>
                        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                            <?php
                            $sql = new MySQL();
                            $res = $sql->consulta("SELECT * FROM categorias");
                            while ($row = $sql->fetch_array($res)) {
                                ?>
                                <li><a href="categorias.php?id_categoria=<?= $row["id_categoria"] ?>"><i class="fa <?= $row["imagen"] ?>"></i><?= $row["categoria"] ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9" style="margin-left: -30px">
                    <h1 class="mb20 text-center">Lo nuevo</h1>

                    <!--<div class="row row-wrap">-->
                    <?php
                    $i = 1;
                    $res = $sql->consulta("SELECT * FROM productos a INNER JOIN categorias b ON a.id_categoria=b.id_categoria ORDER BY fecha_alta DESC LIMIT 6");
                    while ($row = $sql->fetch_array($res)) {
                        if ($i == 1) {

                            echo "<div class='row row-wrap'>";
                        }
                        ?>
                        <div class = "col-md-4">
                            <div class = "product-thumb">
                                <header class = "product-header">
                                    <img src = "panel/<?= $row["foto_principal"] ?>" alt = "" title = "" />
                                </header>
                                <div class = "product-inner">
                                    <h5 class = "product-title"><?= $row["nombre_producto"] ?></h5>
                                    <p class = "product-desciption">
                                        <?= $row["descripcion"] ?>
                                    </p>
                                    <div class = "product-meta">
                                        <ul class = "product-price-list">
                                            <li><span class = "product-price">$<?= $row["precio"] ?>.00</span>
                                            </li>

                                        </ul>
                                        <ul class = "product-actions-list">
                                            <li><a itemid="<?= $row["id_producto"] ?>" class = "btn btn-sm" href = "#" id = "agregarProducto"><i class = "fa fa-shopping-cart"></i> Agregar</a>
                                            </li>
                                            <li><a href = "detalleProducto.php?id_producto=<?= $row["id_producto"] ?>" class = "btn btn-sm"><i class = "fa fa-bars"></i> Ver detalles</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($i == 3) {
                            $i = 0;
                            echo "</div>";
                        }
                        $i++;
                    }
                    ?>
                    <!--</div>-->
                </div>
            </div>
            <div class="gap gap-small"></div>
            <h1 class="mb20 text-center">Artículos al azar </h1>
            <div class="row row-wrap" style="width: 95%; margin-left: 2.5%">
                <?php
                $res = $sql->consulta("SELECT * FROM productos ORDER BY RAND() LIMIT 4");
                while ($row = $sql->fetch_array($res)) {
                    ?>
                    <div class="col-md-3">
                        <div class="product-thumb">
                            <header class = "product-header">
                                <img src = "panel/<?= $row["foto_principal"] ?>" alt = "" title = "" />
                            </header>
                            <div class = "product-inner">
                                <h5 class = "product-title"><?= $row["nombre_producto"] ?></h5>
                                <p class = "product-desciption">
                                    <?= $row["descripcion"] ?>
                                </p>
                                <div class = "product-meta">
                                    <ul class = "product-price-list">
                                        <li><span class = "product-price">$<?= $row["precio"] ?>.00</span>
                                        </li>

                                    </ul>
                                    <ul class = "product-actions-list">
                                        <li><a itemid="<?= $row["id_producto"] ?>" class = "btn btn-sm" href = "#" id = "agregarProducto"><i class = "fa fa-shopping-cart"></i> Agregar</a>
                                        </li>
                                        <li><a href = "detalleProducto.php?id_producto=<?= $row["id_producto"] ?>" class = "btn btn-sm"><i class = "fa fa-bars"></i> Ver detalles</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>




            </div>
            <div class="gap"></div>

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

        if ($boolean) {

            $res = $sql->consulta("SELECT contador FROM visitas");
            if ($row = $sql->fetch_array($res)) {
                $contador = $row["contador"] + 1;
                $sql->consulta("UPDATE visitas SET contador=" . $contador);
            }
        }
        ?>
        <!-- //////////////////////////////////
        //////////////END MAIN  FOOTER///////// 
        ////////////////////////////////////-->



        <!-- Scripts queries -->
        <script src="js/jquery.js"></script>
        <script src="js/evtCarrito.js"></script>
        <script src="js/evtBanner.js"></script>
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
    </div>
</body>

</html>
