<?php

require_once 'database.class.php';

class Action extends dbh{

    // getProducts functions returns all data gathered from table Products and Category   
    public function getProducts(){
        
        $sql = "SELECT * FROM Products INNER JOIN Category ON Products.CategoryId = Category.Id";

        if ($result = $this->connect()->query($sql)) {
            $data = $result->fetchAll(PDO::FETCH_OBJ);
        }
        
        return $data;

    }

    // deleteProducts funtion deletes one or more data from the database
    public function deleteProducts($list){

        $ProductsToRemove = "('" . implode ( "', '", $list ) . "')"; 
        $sql = "DELETE FROM Products WHERE SKU IN $ProductsToRemove";
        $result = $this->connect()->query($sql);
        

    }

}

?>