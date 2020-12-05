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
                <button class="btn btn-danger" form="deleteProducts" type="submit">Mass Delete</button>
            </div>
        </div>
        <hr>
        <form action="delete.php" method="POST" id="deleteProducts">
            <div class="row">    
                <?php
                    $product = new Product();
                    $all = $product->getProducts();
                    if (is_array($all))
                    {
                        foreach ($all as $data) {
                            echo "<div class=\"col-md-3 box\">
                                <input type=\"checkbox\" name=\"check-for-delete[]\" value=\"{$data["SKU"]}\" />
                                <div class=\"inner\">
                                    <p><b>SKU</b>: ".$data["SKU"]."</p>
                                    <p><b>Name</b>: ".$data["Name"]."</p>
                                    <p><b>Price</b>: ".$data["Price"]."</p>
                                    <p><b>".$data["Type"]."</b>: ".$data["Value"]."</p>
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
