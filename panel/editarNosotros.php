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
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Administrador</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="nosotros.php">Regresar</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <?php
        include '../includes/Conexion.php';
        $sql = new MySQL();
        $res = $sql->consulta("SELECT * FROM nosotros WHERE id_foto=" . $_REQUEST["id_foto"]);
        if ($row = $sql->fetch_array($res)) {
            $foto_nosotros = $row["foto_nosotros"];
           
        }
        ?>



        <form style="width: 30%; margin: 0 auto" role="form" id="formProducto" action="accionEditarNosotros.php" enctype="multipart/form-data" method="POST">
           

            <div class="form-group">
                <img src="<?=$foto_nosotros?>" width="30%" />
                <label for="exampleInputFile">Foto nosotros</label>
                <input type="file" id="foto" name="foto">
                <p class="help-block"></p>
            </div>                            
            <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar cambio</button>
            <input type="hidden" id="operacion" name="id_foto" value="<?=$_REQUEST["id_foto"]?>" />
            <!--<input type="reset" id="cleanForm"  value="Limpiar" />-->
        </form>




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquerymin.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>