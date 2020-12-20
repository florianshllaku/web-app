<?php

include_once 'includes\autoloader.php';

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\index.css">
</head>

<body>

    <div class="container">
        <h1>Product List</h1>
        <div class="form-group row">
            <div class="col-xs-2">
                <a href="add.php"><button class="btn btn-primary" >Add</button></a>
            </div>
            <div class="col-xs-4">
                <button class="btn btn-danger" form="deleteProducts" type="submit" name="delete">Mass Delete</button>
            </div>
        </div>
        <hr>
        <form method="POST" id="deleteProducts" action="remove.php">
            <div class="row">    
                <?php
                    $action = new Action();
                    $products = $action->getProducts();
                    if (is_array($products))
                    {
                        foreach ($products as $product) {
                            echo "<div class=\"col-md-3 box\">
                                <input type=\"checkbox\" name=\"check-for-delete[]\" value=\"{$product->SKU}\" />
                                <div class=\"inner\">
                                    <p><b>SKU</b>: ".$product->SKU."</p>
                                    <p><b>Name</b>: ".$product->Name."</p>
                                    <p><b>Price($)</b>: ".$product->Price."</p>
                                    <p><b>".$product->Type."</b>: ".$product->Value."</p>
                                </div>
                            </div>";
                        }
                    }
                ?>
            </div>
        </form>

    </div>
    

</body>
</html>
