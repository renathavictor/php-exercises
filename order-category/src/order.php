<?php

class Order
{
  public function __construct() {
    $this->items = [];
  }

  public function addProduct($product) {
    $id = $product->id;
    if (isset($this->items[$id])) {
      $this->items[$id]->quantity++;
    } else {
      $this->items[$id] = new Item($product);
    }
  }

  public function total($category = null) {
    $result = 0;
    $aux = [];
    if ($category) {
      foreach ($this->items as $prod) {
        if (in_array($category, $prod->product->categories)) {
          $aux[] = $prod;
        }
      }
    } else {
      $aux = $this->items;
    }
    foreach ($aux as $prod) {
      $result += $prod->total();
    }
    return (float)$result;

  } 

  public function __toString() {
    $result = '';
    foreach ($this->items as $key => $item) {
      $id = $item->product->id;
      $name = str_pad($item->product->getNameCompact(),10, " ");
      $quantity = str_pad($item->quantity, 3,"0", STR_PAD_LEFT). " UN";
      $price = str_pad(number_format($item->product->price, 2, '.', ','), 6, " ", STR_PAD_LEFT);
      $total = str_pad(number_format($item->total(),2,'.',','),6, ' ', STR_PAD_LEFT);
      $result .=  "{$id} {$name} {$quantity} {$price} {$total}\n";
    }
    return $result;
  }

  public function getItems($category) {
    $result = [];
    foreach ($this->items as $item) {
      if (in_array($category, $item->product->categories)) {
        $result[] = $item;
      } 
    }

    return $result;
  }
}
