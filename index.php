<?php

include 'includes\autoloader.php';

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css\index.css">
</head>

<body>

    <div class="container">
        <div class="row">
        <?php
        $product = new Product();
        $all = $product->getProducts();
        foreach ($all as $data) {
            echo "<div class=\"col-md-3 box\">
                <input type=\"checkbox\" name=\"check-for-delete\" value=\"{$data["SKU"]}\" />
                <div class=\"inner\">
                    <p><b>SKU</b>: ".$data["SKU"]."</p>
                    <p><b>Name</b>: ".$data["Name"]."</p>
                    <p><b>Price</b>: ".$data["Price"]."</p>
                    <p><b>".$data["Type"]."</b>: ".$data["Value"]."</p>
                </div>
            </div>";
        }
        ?>
        </div>

    </div>
    

</body>
</html>
