<?php

//error_reporting(0); 


include '../includes/Conexion.php';
$sql = new MySQL();
$categoria = $_POST["categoria"];
$clave = $_POST["clave"];
$sql->consulta("INSERT INTO categorias VALUES (null,'" . $categoria . "','" . $clave . "')");
echo "Se ha agregado una nueva categoria<br />";
echo "<a href=categorias.php>Regresar</a>";
?>