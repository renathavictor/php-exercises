<?php

  class Order
  {
    private $products = [];

    public function addProduct($product) {
      $this->products[] = $product;
    }

    public function total() {
      $result = 0;
      foreach ($this->products as $value) {
        $result += $value->price;
      }
      return (int)$result;
    }
  }
