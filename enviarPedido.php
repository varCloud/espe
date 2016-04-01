
<?php

// Varios destinatarios
$para = 'contacto@eespe.com.mx'; // atención a la coma
//$para .= 'adrcoria@gmail.com';
session_start();
$idUsuario = $_SESSION["id_temp"];
include './includes/Conexion.php';
$sql = new MySQL();
$res = $sql->consulta("SELECT * FROM carrito a INNER JOIN productos b ON a.id_producto=b.id_producto WHERE id_usuario_temp='" . $idUsuario . "'");
// título
$html = "<table><tr><th>Nombre:  " . $_POST["nombre"] . "</th><th>Correo:  " . $_POST["correo"] . "</th><th>Telefono:  " . $_POST["telefono"] . "</th></tr><tr><th>Producto</th><th>Cantidad</th><th>Precio</th>";
while ($row = $sql->fetch_array($res)) {
    $html.='
    <tr>
      <td style="text-align:center">' . $row["nombre_producto"] . '</td>
   
      <td style="text-align:center">' . $row["cantidad"] . '</td>
    
     <td style="text-align:center">' . $row["precio"] . '</td>
    </tr>';
}
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
$sql->consulta("DELETE FROM carrito WHERE id_usuario_temp='" . $idUsuario . "'");
if (mail($para, $título, $mensaje, $cabeceras)) {
    ?>
    <script type="text/javascript">
        alert("Pedido enviado correctamente");
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

