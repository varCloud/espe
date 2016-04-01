<?php

include '../includes/Conexion.php';
$sql = new MySQL();
$sql->consulta("DELETE FROM productos WHERE id_producto=" . $_REQUEST["id_producto"]);
echo "Producto eliminado correctamente <br />";
echo "<a href='index.php'>Regresar</a><br />";
?>