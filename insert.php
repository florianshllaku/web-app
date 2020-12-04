<?php

include_once 'includes\autoloader.php';

        $SKU = $_POST['SKU'];
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Type = $_POST['Type'];

        if($Type == "Books"){
            $id = 1;
            $Value = $_POST['Weight']." Kg";
        }else if($Type == "DVDs"){
            $id = 2;
            $Value = $_POST['Size']." Mb";
        }else{
            $id = 3;
            $Value = $_POST['Height'] ."cm x ". $_POST['Width'] ."cm x ". $_POST['Length']."cm";
        }

        $add = new Product();
        $add->addProduct($SKU, $Name, $Price, $id, $Value);
        
        header("Location: index.php");   

?>