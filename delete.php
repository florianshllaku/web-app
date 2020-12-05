<?php

include_once 'includes\autoloader.php';

    $Products = $_POST['check-for-delete'];
    $prepared = '';
    $i = 0;
    $len = count($Products) - 1;
    foreach ($Products as $data) {
        if ($i == $len){
            $prepared = $prepared . "'$data'";
        }else{
            $prepared = $prepared . "'$data', ";
        }
        $i++;
    }
    $delete = new Product();
    $delete->deleteProducts($prepared);

    header("Location: index.php");  

?>