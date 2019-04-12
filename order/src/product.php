<?php

class Product
{
  private $id;
  private $name;
  private $price;

  public function __construct($id, $name, $price = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = !$price ? 0.0 : $price;  
  }

  public function __get($name) {
    return $this->$name;
  }

  public function __ToString() {
    return "Product ID: {$this->id} - Name: {$this->name} - Price: {$this->price}\n";
  }

}
