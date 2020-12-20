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

    // addProduct function insertes data to database
    public function addProduct($SKU, $Name, $Price, $CategoryId, $Value){
        // Initialize a prepare statement
        $sql = $this->connect()->prepare("INSERT INTO Products (SKU, Name, Price, CategoryId, Value) VALUES (?, ?, ?, ?, ?)");
        // Execute the prepared statement by entering Product info values as parameters
        $sql->execute(array($SKU, $Name, $Price, $CategoryId, $Value));
        $sql = null;

    }

    // deleteProducts funtion deletes one or more data from the database
    public function deleteProducts($Products){

        // The parameter of the function will hold SKUs of Products that where selected to be deleted
        $sql = "DELETE FROM Products WHERE SKU IN ($Products)";
        $result = $this->connect()->query($sql);
        

    }

}

?>