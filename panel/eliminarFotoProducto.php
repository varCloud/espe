<?php

include '../includes/Conexion.php';
$sql = new MySQL();
$sql->consulta("DELETE FROM fotos_producto WHERE id_foto_producto=" . $_REQUEST["id"]);
echo "Foto eliminada correctamente <br />";
echo "<a href='agregarGaleria.php?id_producto=".$_REQUEST["id_producto"]."'>Regresar</a><br />";
?>