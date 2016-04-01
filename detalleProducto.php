<!DOCTYPE HTML>
<html>
   
    
    <?php
    session_start();
    if (!isset($_SESSION["id_temp"])) {
        $_SESSION["id_temp"] = session_id();
    }
//    $_SESSION["pag"]="detalleProducto.php";
    
    include './includes/Conexion.php';
    ?>
    <head>
        <title>E ESPE - Detalle de producto</title>
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

            <div class="gap"></div>


            <!-- //////////////////////////////////
            //////////////END MAIN HEADER////////// 
            ////////////////////////////////////-->


            <!-- //////////////////////////////////
            //////////////PAGE CONTENT///////////// 
            ////////////////////////////////////-->



            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <?php
                        $sql = new MySQL();
                        ?>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">
                                    <?php
                                    $i = 0;
                                    $res = $sql->consulta("SELECT foto_principal,foto_secundaria FROM productos a INNER JOIN fotos_producto b ON a.id_producto=b.id_producto WHERE  a.id_producto=" . $_REQUEST["id_producto"]);
                                    while ($row = $sql->fetch_array($res)) {

                                        if ($i == 0) {
                                            ?>
                                            <img src="panel/<?= $row["foto_principal"] ?>" alt="" title="" />
                                            <?php
                                        } else {
                                            ?>
                                            <img src="panel/<?= $row["foto_secundaria"] ?>" alt="" title="" />
                                            <?php
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <?php
                                $idCategoria;
                                $res = $sql->consulta("SELECT * FROM productos WHERE id_producto=" . $_REQUEST["id_producto"]);
                                if ($row = $sql->fetch_array($res)) {
                                    $idCategoria = $row["id_categoria"];
                                    $nombreProducto = $row["nombre_producto"];
                                    $precio = $row["precio"];
                                    $descripcion = $row["descripcion"];
                                    $informacion_adicional = $row["informacion_adicional"];
                                    $info_pago_envio = $row["info_pago_envio"];
                                }
                                ?>
                                <div class="product-info box">
                                    <h3><?= $nombreProducto ?></h3>
                                    <p class="product-info-price">$<?= $precio ?>.00</p>
                                    <p class="text-smaller text-muted"><?= $descripcion ?></p>
                                    <!--                                    <ul class="icon-list list-space product-info-list">
                                                                            <li><i class="fa fa-check"></i>Maecenas montes</li>
                                                                            <li><i class="fa fa-check"></i>Nulla ullamcorper</li>
                                                                            <li><i class="fa fa-check"></i>Ac curabitur</li>
                                                                            <li><i class="fa fa-check"></i>Quis quis</li>
                                                                            <li><i class="fa fa-check"></i>Ut senectus</li>
                                                                        </ul>-->
                                    <ul class="list-inline">
                                        <li><a href="#" id="agregarCarrito" itemid="<?=$_REQUEST["id_producto"]?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
                                        </li>
<!--                                        <li><a href="#" class="btn"><i class="fa fa-star"></i> To Wishlist</a>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="tabbable">
                            <ul class="nav nav-tabs" id="myTab">
<!--                                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                                </li>-->
                                <li  class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-info"></i>Información adicional</a>
                                </li>
                                <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-truck"></i>Informacion de pago y envio</a>
                                </li>
                                <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-comments"></i>Comentarios</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <?= $informacion_adicional ?>
                                </div>
                                <div class="tab-pane fade" id="tab-2">
                                    <?= $info_pago_envio ?>
                                </div>
                                <div class="tab-pane fade" id="tab-3">
                                    <div class="fb-comments" data-href="http://eespe.com.mx/detalleProducto.php?id_producto=<?=$_REQUEST["id_producto"]?>" data-width="600" data-numposts="3" data-colorscheme="light"></div>
                                </div>

                            </div>
                        </div>
                        <div class="gap"></div>
                        <h3>Productos relacionados</h3>
                        <div class="gap gap-mini"></div>
                        <div class="row row-wrap">
                            <?php
                             
                            $res = $sql->consulta("SELECT * FROM productos WHERE id_categoria=" . $idCategoria." AND id_producto NOT IN (".$_REQUEST["id_producto"].") ORDER BY RAND() LIMIT 3");
                            while ($row = $sql->fetch_array($res)) {
                                ?>
                                <div class="col-md-4">
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
                                                    <li><a itemid="<?= $row["id_producto"] ?>" class = "btn btn-sm" href = "#" id ="agregarProducto"><i class = "fa fa-shopping-cart"></i> Agregar</a>
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
                        <div class="gap gap-small"></div>
                    </div>
                </div>

            </div>


            <!-- //////////////////////////////////
            //////////////END PAGE CONTENT///////// 
            ////////////////////////////////////-->


        </div>

            <?php
            include './includes/files/footer.php';
            ?>



            <!-- Scripts queries -->
            <script src="js/jquery.js"></script>
            <script src="js/evtCarrito2.js"></script>
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
