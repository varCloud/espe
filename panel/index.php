<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
?>

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
						<li><a href="galeria.php">Informacion espe</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"></div>
            <div class="col-md-3"> 
                <a href="#myProducto" data-toggle="modal" id="nuevoProducto" class="btn btn-xs btn-info" style="height: 30px">
                    Nuevo producto
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
                                Categoria
                            </th>
                            <th>
                                Nombre de producto
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                Acciones
                            </th>

                        </tr>
                    </thead>
                    <tbody>
<?php
include '../includes/Conexion.php';
$sql = new MySQL();
$res = $sql->consulta("SELECT * FROM productos a INNER JOIN categorias b ON a.id_categoria=b.id_categoria ORDER BY a.id_categoria,fecha_alta");
while ($row = $sql->fetch_array($res)) {
    ?>
                            <tr>
                                <td>
    <?= $row["categoria"] ?>
                                </td>
                                <td>
    <?= $row["nombre_producto"] ?>
                                </td>
                                <td>
    <?= $row["precio"] ?>
                                </td>
                                <td>
    <?= $row["descripcion"] ?>
                                </td>
                                <td>
                                    <!--<a href="#">Editar - </a>--> 
                                    <a href="eliminarProducto.php?id_producto=<?= $row["id_producto"] ?>">Eliminar - </a> 
                                    <a href="editarProducto.php?id_producto=<?= $row["id_producto"] ?>">Editar - </a> 
                                    <a href="agregarGaleria.php?id_producto=<?= $row["id_producto"] ?>">Agregar galeria - </a> 
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

        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myProducto" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Nuevo producto</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="formProducto" action="accionAltaProducto.php" enctype="multipart/form-data" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre del producto</label>
                                <input type="text" class="form-control" maxlength="30" id="nombre_producto" name="nombre_producto" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Categoría</label>
                                <select class="form-control" id="id_categoria" name="id_categoria">
<?php
$res = $sql->consulta("SELECT * FROM categorias ORDER BY categoria");
while ($row = $sql->fetch_array($res)) {
    ?>
                                        <option value="<?= $row["id_categoria"] ?>">
                                        <?= $row["categoria"] ?>
                                        </option>
                                            <?php
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Precio</label>
                                <input type="text" class="form-control" maxlength="30" id="precio" name="precio" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Informacion adicional</label>
                                <textarea class="form-control" name="informacion_adicional" id="informacion_adicional"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Informacion pago envio</label>
                                <textarea class="form-control" name="info_pago_envio" id="info_pago_envio"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Foto principal</label>
                                <input type="file" id="foto" name="foto">
                                <p class="help-block"></p>
                            </div>                            
                            <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar producto</button>
                            <input type="hidden" id="operacion" name="operacion" value="guardarProducto" />
                            <input type="reset" id="cleanForm"  value="Limpiar" />
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