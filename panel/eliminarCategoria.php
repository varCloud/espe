<?php

include '../includes/Conexion.php';
$sql = new MySQL();
$sql->consulta("DELETE FROM categorias WHERE id_categoria=" . $_REQUEST["id"]);
echo "Categoria eliminada correctamente <br />";
echo "<a href='categorias.php'>Regresar</a><br />";
?>