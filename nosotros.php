<!DOCTYPE HTML>
<html>
<?php
include './includes/Conexion.php';
session_start();
//$_SESSION["nosotros"]="nosotros.php";
?>
    <head>
        <title>E ESPE - Nosotros</title>
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
            <div class="gap"></div>


            <!-- //////////////////////////////////
            //////////////END MAIN HEADER////////// 
            ////////////////////////////////////-->


            <!-- //////////////////////////////////
            //////////////PAGE CONTENT///////////// 
            ////////////////////////////////////-->



            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-8">
                        <!-- START BOOTSTRAP CAROUSEL -->
                        <div id="my-carousel" class="carousel slide">
                            <div class="carousel-inner">
                                
                                <?php
                                $sql = new MySQL();
                                $res = $sql->consulta("SELECT * FROM nosotros");
                                $contador=0;
                                while ($row = $sql->fetch_array($res)) {
                                    if($contador==0)
                                    {
                                      ?>
                                    <div class="active item">
                                        <img src="panel/<?=$row["foto_nosotros"]?>" alt="" title="" />
                                    </div>
                                          <?php  
                                    }
                                    else{
                                        ?>
                                    <div class="item">
                                        <img src="panel/<?=$row["foto_nosotros"]?>" alt="" title="" />
                                    </div>
                                            <?php
                                    }
                                    ?>
                                   
                                    <?php
                                    $contador++;
                                }
                                ?>
                                

                            </div>
                            <a class="carousel-control left" href="#my-carousel" data-slide="prev"></a>
                            <a class="carousel-control right" href="#my-carousel" data-slide="next"></a>
                        </div>
                        <!-- END BOOTSTRAP CAROUSEL -->
                    </div>
                    <div class="col-md-4" style="text-align: justify">
                        <h3>Nuestra empresa</h3>
                        <p style="font-size: 12px">E Espe es una empresa que nace de la fusión de Diseño Gráfico y Diseño Industrial,  a lo largo de una  gran trayectoria de trabajos realizados a distintas empresas y áreas,  decidimos crear una marca que engloba las mejores ideas creativas y los distintos materiales en el diseño, el interiorismo y la decoración. </p>
                        <p style="font-size: 12px">Conforme a los gustos y necesidades del cli ente hemos logrado obtener los mejores resultados en decoración  personalizada, rompiendo con estereotipos de materiales, formas, figuras y elementos.  Nosotros diseñamos conforme a sus gustos e ideas y sobretodo  adecuamos al tamaño exacto que requieras cada pieza.</p>
                        <p style="font-size: 12px">Nuestros productos son 100% mexicanos,  elaborados sobre ideas específicas  y diseños innovadores que revolucionan la idea que se tiene de interiorismo y decoración.  Buscamos combinar materiales para formar una mezcla entre lo contemporáneo y lo moderno; tomamos formas, figuras, siluetas,  jugamos con la geometría y  lograr resultados únicos y atractivos.</p>
                        <p style="font-size: 12px">Nuestra meta es ofrecerte servicios y productos de gran calidad y diseño, que cumplen con la funcionalidad y calidad que respalda nuestra empresa.</p>
                    </div>
                </div>
                <div class="gap gap-small"></div>
                <div class="row row-wrap">
                    <div class="col-md-4" style="text-align: justify">
                        <h3>Maquila de Corte</h3>
                        <p style="font-size: 12px">El corte con router computarizado nos permite cortar gran variedad de materiales con gran eficacia ya que una de las ventajas principales es el corte  en alto y bajo relieve que permite la fabricación de piezas desbastadas o gravadas en positivo, negativo y a diferentes profundidades y niveles.
                        Otra ventaja es el bajo costo de producción, por lo que estamos seguros que este sistema es una excelente alternativa de corte. El área máxima de corte es 1.20x2.40x.05m, lo que permite realizar piezas.
                        </p>
                    </div>
                    <div class="col-md-8" >
                        <h3>Materiales</h3>
                        <p style="font-size: 12px">Podemos realizar distintos muebles y elementos combinando materiales como: </p>
                        <ul style="margin-left: 0px; padding-left:  11px; font-size: 12px">
                            <li>
                                <b>Plásticos Rígidos:</b> Acrílicos, Vinil sobre rígidos, Melamina, Nylon, Corian. 
                            </li>
                            <li>
                                <b>Plásticos Suaves:</b> PVC, Poliestireno, ABS, Policarbonato, Foamy, Foamboard, Estireno, Coroplast.
                            </li>
                            <li>
                                <b>Plásticos Compuestos:</b> Fenólico, Fibra de Vidrio, Alucobond,  Nylamid.
                            </li>
                            <li>
                                <b>Maderas Compuestas:</b> MDF, Triplay .
                            </li>
                            <li>
                                <b>Maderas Naturales: </b>Cualquier tipo.
                            </li>
                            <li>
                                <b>Metales no Ferrosos:</b> Aluminio, Latón.
                            </li>
                        </ul>
                    </div>
                   
                </div>
            </div>


            <!-- //////////////////////////////////
            //////////////END PAGE CONTENT///////// 
            ////////////////////////////////////-->



            <!-- //////////////////////////////////
            //////////////MAIN FOOTER////////////// 
            ////////////////////////////////////-->
</div>
		<?php
            include './includes/files/footerMenu.php';
        ?>



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
