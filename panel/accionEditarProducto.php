<?php

//error_reporting(0);


include '../includes/Conexion.php';

$sql = new MySQL();
$id_categoria = $_POST["id_categoria"];
$nombre_producto = $_POST["nombre_producto"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$informacion_adicional = $_POST["informacion_adicional"];
$info_pago_envio = $_POST["info_pago_envio"];
$foto_principal = "";

//Get the temp file path
$tmpFilePath = $_FILES['foto']['tmp_name'];

//Make sure we have a filepath
if ($tmpFilePath != "") {
    //Setup our new file path
    $newfilename = $_FILES['foto']['name'];
    $newFilePath = "fotosProductos/" . rand(1, 999) . $newfilename;
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {

        //al subirimagen

        $foto_principal = $newFilePath;

    } else {

        echo "no subio";
    }
}
if ($tmpFilePath != "") {
    $sql->consulta("UPDATE productos SET id_categoria=" . $id_categoria . ",nombre_producto='" . $nombre_producto . "',precio=" . $precio . ","
            . " descripcion='" . $descripcion . "',informacion_adicional='" . $informacion_adicional . "',info_pago_envio='" . $info_pago_envio . "',foto_principal='" . $foto_principal . "' WHERE id_producto=" . $_POST["id_producto"]);
    echo "Producto editado correctamente <br />";
    echo "<a href='index.php'>Regresar</a><br />";
} else {
    $sql->consulta("UPDATE productos SET id_categoria=" . $id_categoria . ",nombre_producto='" . $nombre_producto . "',precio=" . $precio . ","
            . " descripcion='" . $descripcion . "',informacion_adicional='" . $informacion_adicional . "',info_pago_envio='" . $info_pago_envio . "' WHERE id_producto=" . $_POST["id_producto"]);
    echo "Producto editado correctamente <br />";
    echo "<a href='index.php'>Regresar</a><br />";
}

function createThumbs($pathToImages, $pathToThumbs, $thumbWidth) {
    // open the directory
    $dir = opendir($pathToImages);

    // loop through it, looking for any/all JPG files:
    while (false !== ($fname = readdir($dir))) {
        // parse path for the extension
        $info = pathinfo($pathToImages . $fname);
        // continue only if this is a JPEG image
//        if (strtolower($info['extension']) == 'jpg') {
//            echo "Creating thumbnail for {$fname} <br />";
        // load image and get image size
        $img = imagecreatefromjpeg("{$pathToImages}{$fname}");
        $width = imagesx($img);
        $height = imagesy($img);

        // calculate thumbnail size
        $new_width = $thumbWidth;
        $new_height = floor($height * ( $thumbWidth / $width ));

        // create a new temporary image
        $tmp_img = imagecreatetruecolor($new_width, $new_height);

        // copy and resize old image into new image
        imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        // save thumbnail into a file
        imagejpeg($tmp_img, "{$pathToThumbs}{$fname}");
//        }
    }
    // close the directory
    closedir($dir);
}

?>