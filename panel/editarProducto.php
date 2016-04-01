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
                        <li><a href="index.php">Regresar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <?php
        include '../includes/Conexion.php';
        $sql= new MySQL();
        $res = $sql->consulta("SELECT * FROM productos WHERE id_producto=".$_REQUEST["id_producto"]);
        if($row=$sql->fetch_array($res))
        {
            $nombre_producto=$row["nombre_producto"];
            $precio=$row["precio"];
            $id_categoria=$row["id_categoria"];
            $descripcion=$row["descripcion"];
            $informacion_adicional=$row["informacion_adicional"];
            $info_pago_envio=$row["info_pago_envio"];
            $foto_principal=$row["foto_principal"];
        }

        
        ?>



        <form style="width: 30%; margin: 0 auto" role="form" id="formProducto" action="accionEditarProducto.php" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del producto</label>
                <input type="text" class="form-control" value="<?=$nombre_producto?>" maxlength="30" id="nombre_producto" name="nombre_producto" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Categoría</label>
                <select class="form-control" id="id_categoria" name="id_categoria">
                    <?php
                    $res = $sql->consulta("SELECT * FROM categorias ORDER BY categoria");
                    while ($row = $sql->fetch_array($res)) {
                        if($row["id_categoria"]==$id_categoria)
                        {
                           ?>
                        <option selected value="<?= $row["id_categoria"] ?>">
                            <?= $row["categoria"] ?>
                        </option>
                        <?php 
                        }
                        else{
                            ?>
                        <option value="<?= $row["id_categoria"] ?>">
                            <?= $row["categoria"] ?>
                        </option>
                        <?php
                        }
                        
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Precio</label>
                <input type="text" class="form-control" value="<?=$precio?>" maxlength="30" id="precio" name="precio" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion"><?=$descripcion?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Informacion adicional</label>
                <textarea class="form-control" name="informacion_adicional" id="informacion_adicional"><?=$informacion_adicional?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Informacion pago envio</label>
                <textarea class="form-control"  name="info_pago_envio" id="info_pago_envio"><?=$info_pago_envio?></textarea>
            </div>
            <div class="form-group">
                <img style="width: 30%" src="<?=$foto_principal?>" />
                <label for="exampleInputFile">Cambiar foto</label>
                <input type="file" id="foto" name="foto">
                <p class="help-block"></p>
            </div>                            
            <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar cambios</button>
            <input type="hidden" id="operacion" name="id_producto" value="<?=$_REQUEST["id_producto"]?>" />
            <input type="reset" id="cleanForm"  value="Limpiar" />
        </form>




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquerymin.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>