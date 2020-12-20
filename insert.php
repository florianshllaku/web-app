<?php

include 'includes\autoloader.php';
include 'classes\validation.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // when button add is pressed
        // assign filtered user inputs to variables
        if (isset($_POST['add'])) {
            $SKU = Validation::SKU_input($_POST['SKU']);
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

            // call function addProduct with userInputs as parameters
            $add = new Action();
            $add->addProduct($SKU, $Name, $Price, $id, $Value);
            
            // When Process finishes redirect to index.php
            header("Location: index.php");
        } 
    }

?>
