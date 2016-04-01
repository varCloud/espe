<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>

<?php
?>
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

        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2"><img src="../img/logoespe.png" /></div>
            <div class="col-md-5"></div>

        </div>
        <div class="row">

            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form role="form" id="formBanner" action="ingresa.php" enctype="multipart/form-data" method="POST">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input class="form-control" type="text" name="usuario" />
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input class="form-control" type="password" name="contrasena" />
                    </div>
                                              
                    <button type="submit" id="btnGuardar" class="btn btn-primary">Ingresar</button>
                    
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquerymin.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>