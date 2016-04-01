<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="#">AGREGAR GALERIA</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Regresar</a></li>
                        <!--                        <li class="dropdown">
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




        </form>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form role="form" id="formProducto" action="accionAltaGaleria.php" enctype="multipart/form-data" method="POST"><div class="form-group">
                    <label for="exampleInputFile">Fotos</label>
                    <input type="file" multiple id="foto" name="foto">
                    <input type="hidden" value="<?=$_REQUEST["id_producto"]?>" id="id_producto" name="id_producto" />
                    <p class="help-block"></p>
                </div>                            
                <button type="submit" id="btnGuardar" class="btn btn-primary">Subir imagenes</button>
            </form>
        </div>
        <div class="col-md-3"> 
            <!--                <a href="#myProducto" data-toggle="modal" id="nuevoProducto" class="btn btn-xs btn-info" style="height: 30px">
                                Nuevo producto
                            </a>-->

        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="3">
                            Elije las imagenes para la galeria
                        </th>                         

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../includes/Conexion.php';
                    $sql = new MySQL();
                    $i = 1;
                    $res = $sql->consulta("SELECT * FROM fotos_producto WHERE id_producto=" . $_REQUEST["id_producto"]);
                    while ($row = $sql->fetch_array($res)) {
                        ?>
                        <tr>
                            <td>
                                Foto <?= $i ?>
                            </td>
                            <td>
                                <?= $row["foto_secundaria"] ?>
                            </td>

                            <td>
                                <a href="eliminarFotoProducto.php?id_producto=<?= $row["id_producto"] ?>&id=<?= $row["id_foto_producto"] ?>">Eliminar </a> 
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




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquerymin.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>