<?php

include_once 'includes\autoloader.php';
include_once 'classes\product.class.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // when button add is pressed
        // create new object bassed on selected type
        // use setters to set Product info.
        if (isset($_POST['add'])) {
            
            $product = new $_POST['Type'];
            $product->setSKU($_POST['SKU']);
            $product->setName($_POST['Name']);
            $product->setPrice($_POST['Price']);
            $product->setValue($_POST['Value']);
            // insert data object to database;
            $product->save();
            
            // When Process finishes redirect to index.php
            header("Location: index.php");
        } 
    }

?>
