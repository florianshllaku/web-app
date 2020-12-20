<?php

require_once 'database.class.php';

abstract class Product extends dbh{

    public $SKU;
    public $Name;
    public $Price;

    public function getSKU() {
      return $this->SKU;
    }

    public function getName() {
      return $this->Name;
    }

    public function getPrice() {
      return $this->Price;
    }

    function setSKU($SKU) {
    	$this->SKU = $SKU;
    }

    function setName($Name) {
    	$this->Name = $Name;
    }

    function setPrice($Price) {
    	$this->Price = $Price;
    }

    public function save(){
      $sql = $this->connect()->prepare("INSERT INTO Products (SKU, Name, Price, CategoryId, Value) VALUES (?, ?, ?, ?, ?)");
      $sql->execute(array($this->SKU, $this->Name, $this->Price, $this->id, $this->getValue()));
      $sql = null;
    }

    abstract public function getValue();
    abstract public function setValue($Value);

}

class book extends Product{

    public $Weight;
    public $id = 1;
    
    public function getValue() {
        return $this->Weight;
    }

    function setValue($Value) {
    	$this->Weight = $Value['Weight']." kg";
    }

}

class dvd extends Product{

    public $Size;
    public $id = 2;
    
    public function getValue() {
        return $this->Size;
    }

    function setValue($Value) {
    	$this->Size = $Value['Size']." Mb";
    }

}

class furniture extends Product{

    public $Height;
    public $Width;
    public $Length;
    public $id = 3;

   public function getValue() {
      return $this->Height.$this->Width.$this->Length;
   }

  function setValue($Value) {
    $this->Height = $Value['Height']."cm x ";
    $this->Width = $Value['Width']."cm x ";
    $this->Length = $Value['Length']."cm";
  }

}

 ?>
