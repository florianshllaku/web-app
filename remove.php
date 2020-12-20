<?php

include_once 'includes\autoloader.php';

        // when button delete is pressed
        // gathere an array of checkbox values selected
        if (isset($_POST['delete'])) {

            $action = new Action();
            $action->deleteProducts($_POST['check-for-delete']);
            
        } 

        header("Location: index.php");
    

?>