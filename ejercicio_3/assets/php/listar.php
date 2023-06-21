<?php
include_once('abrirdirectorio.php');
for ($i=0; $i < count($dir_array); $i++) { 
    echo '[',$i,']', $dir_array[$i], '<br>';
}
?>