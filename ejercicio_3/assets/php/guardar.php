<?php
include_once('abrirdirectorio.php');


//remplazar nombrearchivo y texto con lo que haya en el html input.
$file = $directory . $_POST['file_name'] . '.txt';
$texto = $_POST['file_content'];


$fp = fopen($file, "w");
fwrite($fp, $texto);
fclose($fp);
?>