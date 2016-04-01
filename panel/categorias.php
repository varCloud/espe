<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        
        <!-- Font Awesome styles (icons) -->
        <link rel="stylesheet" href="css/font_awesome.css">
        <!-- Main Template styles -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/mystyles.css">
         <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

    <!-- Your custom styles (blank file) -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Menun</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Administrador</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Administracion de productos</a></li>
                        <li><a href="banners.php">Imagenes principal</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="galeria.php">Galeria</a></li>
                        <!--                        <li class="dropdown<li><a href="categorias.php">Imagenes principal</a></li>">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"></div>
            <div class="col-md-3"> 
                <a href="#myProducto" data-toggle="modal" id="nuevoProducto" class="btn btn-xs btn-info" style="height: 30px">
                    Nueva categoria
                </a>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Contador
                            </th>
                            <th>
                                Nombre categoria
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../includes/Conexion.php';
                        $sql = new MySQL();
                        $res = $sql->consulta("SELECT * FROM categorias");
                        $i = 1;
                        while ($row = $sql->fetch_array($res)) {
                            ?>
                            <tr>
                                <td>
                                    <?= $i++ ?>
                                </td>
                                <td>
                                    <i class="fa <?= $row["imagen"] ?>"></i>
                                    <?= $row["categoria"] ?>
                                </td>

                                <td>
                                    <!--<a href="#">Editar - </a>--> 
                                    <a href="eliminarCategoria.php?id=<?= $row["id_categoria"] ?>">Eliminar-</a> 
                                    <a href="editarCategoria.php?id=<?= $row["id_categoria"] ?>">Editar</a> 

                                </td>
                            </tr>   

                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row fontawesome-icon-list">

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/adjust"><i class="fa fa-adjust"></i> fa-adjust</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/anchor"><i class="fa fa-anchor"></i> fa-anchor</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/archive"><i class="fa fa-archive"></i> fa-archive</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/arrows"><i class="fa fa-arrows"></i> fa-arrows</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/arrows-h"><i class="fa fa-arrows-h"></i> fa-arrows-h</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/arrows-v"><i class="fa fa-arrows-v"></i> fa-arrows-v</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/asterisk"><i class="fa fa-asterisk"></i> fa-asterisk</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/car"><i class="fa fa-automobile"></i> fa-automobile <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/ban"><i class="fa fa-ban"></i> fa-ban</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/university"><i class="fa fa-bank"></i> fa-bank <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bar-chart-o"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/barcode"><i class="fa fa-barcode"></i> fa-barcode</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bars"><i class="fa fa-bars"></i> fa-bars</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/beer"><i class="fa fa-beer"></i> fa-beer</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bell"><i class="fa fa-bell"></i> fa-bell</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bell-o"><i class="fa fa-bell-o"></i> fa-bell-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bolt"><i class="fa fa-bolt"></i> fa-bolt</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bomb"><i class="fa fa-bomb"></i> fa-bomb</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/book"><i class="fa fa-book"></i> fa-book</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bookmark"><i class="fa fa-bookmark"></i> fa-bookmark</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bookmark-o"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/briefcase"><i class="fa fa-briefcase"></i> fa-briefcase</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bug"><i class="fa fa-bug"></i> fa-bug</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/building"><i class="fa fa-building"></i> fa-building</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/building-o"><i class="fa fa-building-o"></i> fa-building-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bullhorn"><i class="fa fa-bullhorn"></i> fa-bullhorn</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bullseye"><i class="fa fa-bullseye"></i> fa-bullseye</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/taxi"><i class="fa fa-cab"></i> fa-cab <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/calendar"><i class="fa fa-calendar"></i> fa-calendar</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/calendar-o"><i class="fa fa-calendar-o"></i> fa-calendar-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/camera"><i class="fa fa-camera"></i> fa-camera</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/camera-retro"><i class="fa fa-camera-retro"></i> fa-camera-retro</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/car"><i class="fa fa-car"></i> fa-car</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-down"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-left"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-right"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-up"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/certificate"><i class="fa fa-certificate"></i> fa-certificate</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/check"><i class="fa fa-check"></i> fa-check</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/check-circle"><i class="fa fa-check-circle"></i> fa-check-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/check-circle-o"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/check-square"><i class="fa fa-check-square"></i> fa-check-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/check-square-o"><i class="fa fa-check-square-o"></i> fa-check-square-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/child"><i class="fa fa-child"></i> fa-child</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/circle"><i class="fa fa-circle"></i> fa-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/circle-o"><i class="fa fa-circle-o"></i> fa-circle-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/circle-o-notch"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/circle-thin"><i class="fa fa-circle-thin"></i> fa-circle-thin</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/clock-o"><i class="fa fa-clock-o"></i> fa-clock-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cloud"><i class="fa fa-cloud"></i> fa-cloud</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cloud-download"><i class="fa fa-cloud-download"></i> fa-cloud-download</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cloud-upload"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/code"><i class="fa fa-code"></i> fa-code</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/code-fork"><i class="fa fa-code-fork"></i> fa-code-fork</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/coffee"><i class="fa fa-coffee"></i> fa-coffee</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cog"><i class="fa fa-cog"></i> fa-cog</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cogs"><i class="fa fa-cogs"></i> fa-cogs</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/comment"><i class="fa fa-comment"></i> fa-comment</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/comment-o"><i class="fa fa-comment-o"></i> fa-comment-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/comments"><i class="fa fa-comments"></i> fa-comments</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/comments-o"><i class="fa fa-comments-o"></i> fa-comments-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/compass"><i class="fa fa-compass"></i> fa-compass</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/credit-card"><i class="fa fa-credit-card"></i> fa-credit-card</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/crop"><i class="fa fa-crop"></i> fa-crop</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/crosshairs"><i class="fa fa-crosshairs"></i> fa-crosshairs</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cube"><i class="fa fa-cube"></i> fa-cube</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cubes"><i class="fa fa-cubes"></i> fa-cubes</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cutlery"><i class="fa fa-cutlery"></i> fa-cutlery</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tachometer"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/database"><i class="fa fa-database"></i> fa-database</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/desktop"><i class="fa fa-desktop"></i> fa-desktop</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/dot-circle-o"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/download"><i class="fa fa-download"></i> fa-download</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/pencil-square-o"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/ellipsis-h"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/ellipsis-v"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/envelope"><i class="fa fa-envelope"></i> fa-envelope</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/envelope-o"><i class="fa fa-envelope-o"></i> fa-envelope-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/envelope-square"><i class="fa fa-envelope-square"></i> fa-envelope-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/eraser"><i class="fa fa-eraser"></i> fa-eraser</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/exchange"><i class="fa fa-exchange"></i> fa-exchange</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/exclamation"><i class="fa fa-exclamation"></i> fa-exclamation</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/exclamation-circle"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/exclamation-triangle"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/external-link"><i class="fa fa-external-link"></i> fa-external-link</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/external-link-square"><i class="fa fa-external-link-square"></i> fa-external-link-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/eye"><i class="fa fa-eye"></i> fa-eye</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/eye-slash"><i class="fa fa-eye-slash"></i> fa-eye-slash</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/fax"><i class="fa fa-fax"></i> fa-fax</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/female"><i class="fa fa-female"></i> fa-female</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/fighter-jet"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-archive-o"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-audio-o"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-code-o"><i class="fa fa-file-code-o"></i> fa-file-code-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-excel-o"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-image-o"><i class="fa fa-file-image-o"></i> fa-file-image-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-video-o"><i class="fa fa-file-movie-o"></i> fa-file-movie-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-pdf-o"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-image-o"><i class="fa fa-file-photo-o"></i> fa-file-photo-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-image-o"><i class="fa fa-file-picture-o"></i> fa-file-picture-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-powerpoint-o"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-audio-o"><i class="fa fa-file-sound-o"></i> fa-file-sound-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-video-o"><i class="fa fa-file-video-o"></i> fa-file-video-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-word-o"><i class="fa fa-file-word-o"></i> fa-file-word-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/file-archive-o"><i class="fa fa-file-zip-o"></i> fa-file-zip-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/film"><i class="fa fa-film"></i> fa-film</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/filter"><i class="fa fa-filter"></i> fa-filter</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/fire"><i class="fa fa-fire"></i> fa-fire</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/fire-extinguisher"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/flag"><i class="fa fa-flag"></i> fa-flag</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/flag-checkered"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/flag-o"><i class="fa fa-flag-o"></i> fa-flag-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bolt"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/flask"><i class="fa fa-flask"></i> fa-flask</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/folder"><i class="fa fa-folder"></i> fa-folder</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/folder-o"><i class="fa fa-folder-o"></i> fa-folder-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/folder-open"><i class="fa fa-folder-open"></i> fa-folder-open</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/folder-open-o"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/frown-o"><i class="fa fa-frown-o"></i> fa-frown-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/gamepad"><i class="fa fa-gamepad"></i> fa-gamepad</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/gavel"><i class="fa fa-gavel"></i> fa-gavel</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cog"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/cogs"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/gift"><i class="fa fa-gift"></i> fa-gift</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/glass"><i class="fa fa-glass"></i> fa-glass</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/globe"><i class="fa fa-globe"></i> fa-globe</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/graduation-cap"><i class="fa fa-graduation-cap"></i> fa-graduation-cap</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/users"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/hdd-o"><i class="fa fa-hdd-o"></i> fa-hdd-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/headphones"><i class="fa fa-headphones"></i> fa-headphones</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/heart"><i class="fa fa-heart"></i> fa-heart</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/heart-o"><i class="fa fa-heart-o"></i> fa-heart-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/history"><i class="fa fa-history"></i> fa-history</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/home"><i class="fa fa-home"></i> fa-home</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/picture-o"><i class="fa fa-image"></i> fa-image <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/inbox"><i class="fa fa-inbox"></i> fa-inbox</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/info"><i class="fa fa-info"></i> fa-info</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/info-circle"><i class="fa fa-info-circle"></i> fa-info-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/university"><i class="fa fa-institution"></i> fa-institution <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/key"><i class="fa fa-key"></i> fa-key</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/keyboard-o"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/language"><i class="fa fa-language"></i> fa-language</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/laptop"><i class="fa fa-laptop"></i> fa-laptop</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/leaf"><i class="fa fa-leaf"></i> fa-leaf</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/gavel"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/lemon-o"><i class="fa fa-lemon-o"></i> fa-lemon-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/level-down"><i class="fa fa-level-down"></i> fa-level-down</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/level-up"><i class="fa fa-level-up"></i> fa-level-up</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/life-ring"><i class="fa fa-life-bouy"></i> fa-life-bouy <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/life-ring"><i class="fa fa-life-ring"></i> fa-life-ring</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/life-ring"><i class="fa fa-life-saver"></i> fa-life-saver <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/lightbulb-o"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/location-arrow"><i class="fa fa-location-arrow"></i> fa-location-arrow</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/lock"><i class="fa fa-lock"></i> fa-lock</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/magic"><i class="fa fa-magic"></i> fa-magic</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/magnet"><i class="fa fa-magnet"></i> fa-magnet</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/share"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/reply"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/reply-all"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/male"><i class="fa fa-male"></i> fa-male</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/map-marker"><i class="fa fa-map-marker"></i> fa-map-marker</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/meh-o"><i class="fa fa-meh-o"></i> fa-meh-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/microphone"><i class="fa fa-microphone"></i> fa-microphone</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/microphone-slash"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/minus"><i class="fa fa-minus"></i> fa-minus</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/minus-circle"><i class="fa fa-minus-circle"></i> fa-minus-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/minus-square"><i class="fa fa-minus-square"></i> fa-minus-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/minus-square-o"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/mobile"><i class="fa fa-mobile"></i> fa-mobile</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/mobile"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/money"><i class="fa fa-money"></i> fa-money</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/moon-o"><i class="fa fa-moon-o"></i> fa-moon-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/graduation-cap"><i class="fa fa-mortar-board"></i> fa-mortar-board <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/music"><i class="fa fa-music"></i> fa-music</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bars"><i class="fa fa-navicon"></i> fa-navicon <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/paper-plane"><i class="fa fa-paper-plane"></i> fa-paper-plane</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/paper-plane-o"><i class="fa fa-paper-plane-o"></i> fa-paper-plane-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/paw"><i class="fa fa-paw"></i> fa-paw</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/pencil"><i class="fa fa-pencil"></i> fa-pencil</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/pencil-square"><i class="fa fa-pencil-square"></i> fa-pencil-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/pencil-square-o"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/phone"><i class="fa fa-phone"></i> fa-phone</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/phone-square"><i class="fa fa-phone-square"></i> fa-phone-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/picture-o"><i class="fa fa-photo"></i> fa-photo <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/picture-o"><i class="fa fa-picture-o"></i> fa-picture-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/plane"><i class="fa fa-plane"></i> fa-plane</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/plus"><i class="fa fa-plus"></i> fa-plus</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/plus-circle"><i class="fa fa-plus-circle"></i> fa-plus-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/plus-square"><i class="fa fa-plus-square"></i> fa-plus-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/plus-square-o"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/power-off"><i class="fa fa-power-off"></i> fa-power-off</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/print"><i class="fa fa-print"></i> fa-print</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/puzzle-piece"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/qrcode"><i class="fa fa-qrcode"></i> fa-qrcode</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/question"><i class="fa fa-question"></i> fa-question</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/question-circle"><i class="fa fa-question-circle"></i> fa-question-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/quote-left"><i class="fa fa-quote-left"></i> fa-quote-left</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/quote-right"><i class="fa fa-quote-right"></i> fa-quote-right</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/random"><i class="fa fa-random"></i> fa-random</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/recycle"><i class="fa fa-recycle"></i> fa-recycle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/refresh"><i class="fa fa-refresh"></i> fa-refresh</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/bars"><i class="fa fa-reorder"></i> fa-reorder <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/reply"><i class="fa fa-reply"></i> fa-reply</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/reply-all"><i class="fa fa-reply-all"></i> fa-reply-all</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/retweet"><i class="fa fa-retweet"></i> fa-retweet</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/road"><i class="fa fa-road"></i> fa-road</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/rocket"><i class="fa fa-rocket"></i> fa-rocket</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/rss"><i class="fa fa-rss"></i> fa-rss</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/rss-square"><i class="fa fa-rss-square"></i> fa-rss-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/search"><i class="fa fa-search"></i> fa-search</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/search-minus"><i class="fa fa-search-minus"></i> fa-search-minus</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/search-plus"><i class="fa fa-search-plus"></i> fa-search-plus</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/paper-plane"><i class="fa fa-send"></i> fa-send <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/paper-plane-o"><i class="fa fa-send-o"></i> fa-send-o <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/share"><i class="fa fa-share"></i> fa-share</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/share-alt"><i class="fa fa-share-alt"></i> fa-share-alt</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/share-alt-square"><i class="fa fa-share-alt-square"></i> fa-share-alt-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/share-square"><i class="fa fa-share-square"></i> fa-share-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/share-square-o"><i class="fa fa-share-square-o"></i> fa-share-square-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/shield"><i class="fa fa-shield"></i> fa-shield</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/shopping-cart"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sign-in"><i class="fa fa-sign-in"></i> fa-sign-in</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sign-out"><i class="fa fa-sign-out"></i> fa-sign-out</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/signal"><i class="fa fa-signal"></i> fa-signal</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sitemap"><i class="fa fa-sitemap"></i> fa-sitemap</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sliders"><i class="fa fa-sliders"></i> fa-sliders</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/smile-o"><i class="fa fa-smile-o"></i> fa-smile-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort"><i class="fa fa-sort"></i> fa-sort</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-alpha-asc"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-alpha-desc"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-amount-asc"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-amount-desc"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-asc"><i class="fa fa-sort-asc"></i> fa-sort-asc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-desc"><i class="fa fa-sort-desc"></i> fa-sort-desc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-desc"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-numeric-asc"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-numeric-desc"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort-asc"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/space-shuttle"><i class="fa fa-space-shuttle"></i> fa-space-shuttle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/spinner"><i class="fa fa-spinner"></i> fa-spinner</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/spoon"><i class="fa fa-spoon"></i> fa-spoon</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/square"><i class="fa fa-square"></i> fa-square</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/square-o"><i class="fa fa-square-o"></i> fa-square-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/star"><i class="fa fa-star"></i> fa-star</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/star-half"><i class="fa fa-star-half"></i> fa-star-half</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/star-half-o"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/star-half-o"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/star-half-o"><i class="fa fa-star-half-o"></i> fa-star-half-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/star-o"><i class="fa fa-star-o"></i> fa-star-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/suitcase"><i class="fa fa-suitcase"></i> fa-suitcase</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sun-o"><i class="fa fa-sun-o"></i> fa-sun-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/life-ring"><i class="fa fa-support"></i> fa-support <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tablet"><i class="fa fa-tablet"></i> fa-tablet</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tachometer"><i class="fa fa-tachometer"></i> fa-tachometer</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tag"><i class="fa fa-tag"></i> fa-tag</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tags"><i class="fa fa-tags"></i> fa-tags</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tasks"><i class="fa fa-tasks"></i> fa-tasks</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/taxi"><i class="fa fa-taxi"></i> fa-taxi</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/terminal"><i class="fa fa-terminal"></i> fa-terminal</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/thumb-tack"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/thumbs-down"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/thumbs-o-down"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/thumbs-o-up"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/thumbs-up"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/ticket"><i class="fa fa-ticket"></i> fa-ticket</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/times"><i class="fa fa-times"></i> fa-times</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/times-circle"><i class="fa fa-times-circle"></i> fa-times-circle</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/times-circle-o"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tint"><i class="fa fa-tint"></i> fa-tint</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-down"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-left"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-right"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/caret-square-o-up"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/trash-o"><i class="fa fa-trash-o"></i> fa-trash-o</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/tree"><i class="fa fa-tree"></i> fa-tree</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/trophy"><i class="fa fa-trophy"></i> fa-trophy</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/truck"><i class="fa fa-truck"></i> fa-truck</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/umbrella"><i class="fa fa-umbrella"></i> fa-umbrella</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/university"><i class="fa fa-university"></i> fa-university</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/unlock"><i class="fa fa-unlock"></i> fa-unlock</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/unlock-alt"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/sort"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/upload"><i class="fa fa-upload"></i> fa-upload</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/user"><i class="fa fa-user"></i> fa-user</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/users"><i class="fa fa-users"></i> fa-users</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/video-camera"><i class="fa fa-video-camera"></i> fa-video-camera</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/volume-down"><i class="fa fa-volume-down"></i> fa-volume-down</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/volume-off"><i class="fa fa-volume-off"></i> fa-volume-off</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/volume-up"><i class="fa fa-volume-up"></i> fa-volume-up</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/exclamation-triangle"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/wheelchair"><i class="fa fa-wheelchair"></i> fa-wheelchair</a>
                </div>

                <div class="fa-hover col-md-3 col-sm-4"><a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icon/wrench"><i class="fa fa-wrench"></i> fa-wrench</a>
                </div>

            </div>
            </div>
            
        </div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myProducto" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Nueva categoria</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="formCategoria" action="altaCategoria.php"  method="POST">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre categoria</label>
                                <input type="text" class="form-control" name="categoria" id="categoria" />
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Clave icono</label>
                                <input type="text" class="form-control" name="clave" id="clave" />
                            </div> 
                            <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar categoria</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquerymin.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>