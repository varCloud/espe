<?php

//error_reporting(0); 
include '../includes/Conexion.php';
$sql = new MySQL();
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
//$res = $sql->consulta("SELECT * FROM claves WHERE usuario LIKE '%" . $usuario . "%' AND contrasena LIKE '%" . $contrasena . "%'");
//$rows = $sql->num_rows($res);
if ($usuario == "jesus" && $contrasena == "admin769") {
    session_start();
    $_SESSION["usuario"] = "jesus";
    header("Location: index.php");
} else {
    header("Location: login.php");
}
?>