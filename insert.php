<?php

include_once 'includes\autoloader.php';
include 'classes\validation.php';

        $SKU = Validation::character_input($_POST['SKU']);
        $Name = Validation::character_input($_POST['Name']);
        $Price = Validation::numeric_input($_POST['Price']);
        $Type = $_POST['Type'];

        if($Type == "Books"){
            $id = 1;
            $Value = Validation::numeric_input($_POST['Weight'])." Kg";
        }else if($Type == "DVDs"){
            $id = 2;
            $Value = Validation::numeric_input($_POST['Size'])." Mb";
        }else if($Type == "Furniture"){
            $id = 3;
            $Value = Validation::numeric_input($_POST['Height']) ."cm x ". Validation::numeric_input($_POST['Width']) ."cm x ". Validation::numeric_input($_POST['Length'])."cm";
        }

        $add = new Product();
        $add->addProduct($SKU, $Name, $Price, $id, $Value);
        
        header("Location: index.php");   

?>