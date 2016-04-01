<?php

//error_reporting(0);


include '../includes/Conexion.php';
$sql = new MySQL();


//Get the temp file path
$tmpFilePath = $_FILES['foto']['tmp_name'];

//Make sure we have a filepath
if ($tmpFilePath != "") {
    //Setup our new file path
    $newfilename = $_FILES['foto']['name'];
    $newFilePath = "fotosProductos/" . rand(1, 999) . $newfilename;
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {

        //al subirimagen

        $sql = new MySQL();
        $id_categoria = $_POST["id_categoria"];
        $nombre_producto = $_POST["nombre_producto"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $informacion_adicional = $_POST["informacion_adicional"];
        $info_pago_envio = $_POST["info_pago_envio"];
        $foto_principal = $newFilePath;


        $sql->consulta("INSERT INTO productos VALUES (null," . $id_categoria . ",'" . $nombre_producto . "'," . $precio . ","
                . " '" . $descripcion . "','" . $informacion_adicional . "','" . $info_pago_envio . "','" . $foto_principal . "',now())");
//        header("Location:","index.php");
        echo "Producto agregado correctamente <br />";
        echo "<a href='index.php'>Regresar</a><br />";
    } else {

        echo "no subio";
    }
}

//    header('Location: ../exito.php');


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