<?php

include '../includes/Conexion.php';
$sql = new MySQL();
$sql->consulta("DELETE FROM galeria WHERE id_imagen=" . $_REQUEST["id"]);
echo "Foto eliminada correctamente <br />";
echo "<a href='galeria.php'>Regresar</a><br />";
?>