<?php
/* -------- File Handling ---------- */ 
//Manejo de archivos es la capacidad de leer y escribir archivos en el servidor de php

$file = 'extras/users.txt';

if(file_exists($file)) {
    //echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Brand' . PHP_EOL . 'Sara' . PHP_EOL . 'Mile';
    fwrite($handle, $contents);
    fclose($handle);
}

?>