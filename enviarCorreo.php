
<?php

// Varios destinatarios
$para = 'contacto@eespe.com.mx'; // atención a la coma
//$para = 'adrcoria@gmail.com';
//
$nombre=$_POST["nombre"];
$mail=$_POST["mail"];
$mensaje=$_POST["mensaje"];
$telefono=$_POST["telefono"];

$html.="<table>";
$html.="<tr><td>Nombre: ".$nombre."</td></tr>";
$html.="<tr><td>Mail: ".$mail."</td></tr>";
$html.="<tr><td>Telefono: ".$telefono."</td></tr>";
$html.="<tr><td>Mensaje: ".$mensaje."</td></tr>";
$html.="</table>";
$título = 'Mensaje de pagina';

// mensaje
$mensaje = '
<html>
<head>
  <title>Mensaje de pagina web</title>
</head>
<body>
  ' . $html . '
</body>
</html>
';
//echo $mensaje;
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Admin <contacto@eespe.com.mx>' . "\r\n";
$cabeceras .= 'From: Mensaje Pagina' . "\r\n";

// Enviarlo

if (mail($para, $título, $mensaje, $cabeceras)) {
    ?>
    <script type="text/javascript">
        alert("Correo enviado correctamente");
        window.location.href = "index.php";
    </script>
    <?php

} else {
    ?>
    <script type="text/javascript">
        alert("No se ha completado la operacion, intente de nuevo");
        window.location.href = "index.php";
    </script>
    <?php

}
?>

