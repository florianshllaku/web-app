<?php

require_once 'db_conn.class.php';

class Product extends dbh{

    public function getProducts(){
        
        $sql = "SELECT * FROM Products INNER JOIN Category ON Products.CategoryId = Category.Id";
        $result = $this->connect()->query($sql);
        while($row = $result->fetch()) {
            $data[] = $row;
        }
        
        if (isset($data)){
            return $data;
        }

    }

    public function addProduct($SKU, $Name, $Price, $CategoryId, $Value){

        $sql = "INSERT INTO Products (SKU, Name, Price, CategoryId, Value) VALUES ('$SKU', '$Name', $Price, $CategoryId, '$Value')";
        $result = $this->connect()->query($sql);

    }

    public function deleteProducts($Products){

        $sql = "DELETE FROM Products WHERE SKU IN ($Products)";
        $result = $this->connect()->query($sql);

    }

}

?>