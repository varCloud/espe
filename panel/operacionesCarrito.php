<?php

$operacion = $_POST["operacion"];
session_start();
//echo "algo";
$idUsuario = $_SESSION["id_temp"];
include '../includes/Conexion.php';
$sql = new MySQL();
switch ($operacion) {
    case "agregarCarrito":
        $res = $sql->consulta("SELECT ifnull(cantidad,0) as cantidad FROM carrito WHERE id_usuario_temp='" . $idUsuario . "' AND id_producto=" . $_POST["id_producto"]);
        $existe = $sql->num_rows($res);
        if ($existe >= 1) {
            if ($row = $sql->fetch_array($res)) {

                $cantidad = $row["cantidad"] + 1;
            }

            $sql->consulta("UPDATE carrito SET cantidad=" . $cantidad . " WHERE id_usuario_temp='" . $idUsuario . "' AND id_producto=" . $_POST["id_producto"]);
        } else {
            //es nuevo
            $sql->consulta("INSERT INTO carrito VALUES (null," . $_POST["id_producto"] . ",1,'" . $idUsuario . "',now())");
        }
        break;

    case "cargarCarrito":
        $html="";
        $res = $sql->consulta("SELECT * FROM carrito a INNER JOIN productos b ON a.id_producto=b.id_producto WHERE id_usuario_temp='" . $idUsuario . "'");
        while ($row = $sql->fetch_array($res)) {
            $imagen = "panel/" . $row["foto_principal"];
            $nombreProducto = $row["nombre_producto"];
            $precio = $row["precio"];
            $html.='<li>
            <a href="#">
                <img src="' . $imagen . '" alt="Image Alternative text" title="AMaze" />
                <h5>' . $nombreProducto . '</h5><span class="shopping-cart-item-price">$' . $precio . '.00</span>
            </a>
        </li>';
        }
        echo $html;
        break;
    case "removerProducto":
        $sql->consulta("DELETE FROM carrito WHERE contador=".$_POST["contador"]);
        break;
    default:
        break;
}
?>
