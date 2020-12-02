<?php

require_once 'classes\db_conn.class.php';

class Product extends dbh{

    public function getProducts(){
        
        $sql = "SELECT * FROM Products INNER JOIN Category ON Products.CategoryId = Category.Id";
        $result = $this->connect()->query($sql);
        while($row = $result->fetch()) {
            $data[] = $row;
        }

        return $data;

    }

}

?>