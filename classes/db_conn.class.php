<?php

class dbh{
    
    private $dsn;
    private $dbpass;
    private $dbuser;

    protected function connect(){
        $this->dsn = "mysql:host=localhost;dbname=appdb";
        $this->dbpass = "";
        $this->dbuser = "root";

        // Creates pdo connection with the mysql database
        $conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;

    }

}

?>