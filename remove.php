<?php

include_once 'includes\autoloader.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // when button delete is pressed
        // gathere an array of checkbox values selected
        if (isset($_POST['delete'])) {
            $Products = $_POST['check-for-delete'];
            // prepare parameter for the function deleteProducts
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

            // Call function deleteProducts()
            $delete = new Action();
            $delete->deleteProducts($prepared);

            // Redirect to index.php
            header("Location: index.php"); 
        } 
    }
