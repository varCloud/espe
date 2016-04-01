<!DOCTYPE HTML>
<html>
    <?php
    session_start(); //echo "algo";
    $idUsuario = $_SESSION["id_temp"];
    include './includes/Conexion.php';
//    $_SESSION["pag"]="verCarrito.php";
    ?>
    <head>
        <title>E Espe Carrito</title>
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




            <!-- END LOGIN REGISTER LINKS CONTENT -->



            <!-- SEARCH AREA -->

            <!-- END SEARCH AREA -->

            <div class="gap"></div>


            <!-- //////////////////////////////////
            //////////////END MAIN HEADER////////// 
            ////////////////////////////////////-->


            <!-- //////////////////////////////////
            //////////////PAGE CONTENT///////////// 
            ////////////////////////////////////-->



            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table cart-table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = new MySQL();
                                $total = 0;
                                $res = $sql->consulta("SELECT * FROM carrito a INNER JOIN productos b ON a.id_producto=b.id_producto WHERE id_usuario_temp='" . $idUsuario . "'");
                                while ($row = $sql->fetch_array($res)) {
                                    ?>
                                    <tr>
                                        <td class="cart-item-image">
                                            <a href="#">
                                                <img style="width: 80px" src="panel/<?= $row["foto_principal"] ?>" alt="Image Alternative text" title="AMaze" />
                                            </a>
                                        </td>
                                        <td><a href="#"><?= $row["nombre_producto"] ?></a>
                                        </td>
                                        <td class="cart-item-quantity" >
                                            <?= $row["cantidad"] ?>
                                        </td>
                                        <td>$<?= $row["precio"] ?>.00</td>
                                        <td class="cart-item-remove">
                                            <a class="fa fa-times" id="removerProducto" itemid="<?= $row["contador"] ?>" href="#"></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $total = $total + ($row["cantidad"] * $row["precio"]);
                                }
                                ?>


                            </tbody>
                        </table>	
                    </div>
                    <div class="col-md-3">
                        <ul class="cart-total-list">


                            <li><span>Total</span><span>$<?= $total ?>.00</span>
                            </li>
                        </ul>
                        <form action="enviarPedido.php" id="formPedido" method="POST">
                            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre...." />
                            <br />
                            <input class="form-control" type="email" name="correo" id="correo" placeholder="Escribe tu correo electronico...." />
                            <br />
                            <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Escribe tu Telefono...." />
                             <br />
                            <a href="#" id="enviar" class="btn btn-primary btn-lg">Enviar pedido</a>
                        </form>
                    </div>
                </div>
                <div class="gap"></div>
            </div>


            <!-- //////////////////////////////////
            //////////////END PAGE CONTENT///////// 
            ////////////////////////////////////-->



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
            <script type="text/javascript">
            $("document").ready(function() {
                $("#removerProducto").click(function() {
                    var id = $(this).attr("itemid");
                    $.ajax({
                        type: "POST",
                        url: "panel/operacionesCarrito.php",
                        data: "contador=" + id + "&operacion=removerProducto",
                        async: false,
                        success: function(datos) {
                            alert("Se ha removido articulo");
                            window.location.href = "verCarrito.php"

                        }
                    });
                });

                $("#enviar").click(function() {

                    if ($("#correo").val() == "")
                    {
                        alert("Escribe tu correo electrónico para solicitar tu pedido!");
                        return false;
                    }
                    document.getElementById("formPedido").submit();
                });
            });
            </script>
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
