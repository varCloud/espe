<?php


include '../includes/Conexion.php';
$sql = new MySQL();
$categoria=$_POST["categoria"];
$clave=$_POST["clave"];
$sql->consulta("UPDATE categorias SET categoria='".$categoria."', imagen='".$clave."' WHERE id_categoria=".$_POST["id_categoria"]);
echo "Se ha agregado editado la categoria<br />";
echo "<a href=categorias.php>Regresar</a>";

?>