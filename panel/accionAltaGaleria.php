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
//        echo $newFilePath;  
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {


        $sql->consulta("INSERT INTO fotos_producto VALUES (null," . $_REQUEST["id_producto"] . ",'" . $newFilePath . "')");
//        header("Location:","index.php");
        echo "Se ha agregado una imagen a la galeria<br />";
        echo "<a href=agregarGaleria.php?id_producto=" . $_REQUEST["id_producto"] . ">Regresar</a>";
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