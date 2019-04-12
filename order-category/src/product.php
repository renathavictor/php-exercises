<?php

class Product
{
  /* private $id;
  private $name;
  private $price; */

  public function __construct($id, $name, $price = null, $categories = []) {
    $this->id = $id;
    $this->name = $name;
    $this->price = !$price ? 0.0 : $price;  
    $this->categories = $categories;
  }

  public function __get($name) {
    return $this->$name;
  }

  public function getNameCompact() {
    return substr($this->name,0,10);
  }
}
