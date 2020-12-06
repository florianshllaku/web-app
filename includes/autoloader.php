<?php

// register autoloader function
spl_autoload_register('autoloader');

function autoloader($className){
    $path = "classes\\";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    if (!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}

?>