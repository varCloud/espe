<?php

include '../includes/Conexion.php';
$sql = new MySQL();
$sql->consulta("DELETE FROM nosotros WHERE id_foto=" . $_REQUEST["id_foto"]);
echo "Foto eliminada correctamente <br />";
echo "<a href='nosotros.php'>Regresar</a><br />";
?>