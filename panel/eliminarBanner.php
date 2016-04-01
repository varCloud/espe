<?php

include '../includes/Conexion.php';
$sql = new MySQL();
$sql->consulta("DELETE FROM fotos_banner WHERE id_foto_banner=" . $_REQUEST["id"]);
echo "Foto eliminada correctamente <br />";
echo "<a href='banners.php'>Regresar</a><br />";
?>