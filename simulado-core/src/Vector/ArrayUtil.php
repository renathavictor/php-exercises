<?php
namespace Vector;

class ArrayUtil
{

  public function __construct($array)
  {
    $this->array = $array;
  }

  public function rotLeft($d)
  {
    $aux = array_slice($this->array, $d);
    $back = array_slice($this->array, 0, $d);
    $result = array_merge($aux, $back);
    return $result;
  }

  public function stats()
  {
    $bigger = 0;
    $smaller = 0;
    $zero = 0;
    foreach ($this->array as $value) {
      if ($value > 0) {
        $bigger += 1;
      } else if ($value < 0) {
        $smaller += 1;
      } else {
        $zero += 1;
      }
    }
    $big = \number_format($bigger/sizeof($this->array), 6);
    $small = \number_format($smaller/sizeof($this->array), 6);
    $equal = \number_format($zero/sizeof($this->array), 6);
    return [$big, $small, $equal];
  }
  
  public function miniMaxSum()
  {
    $biggest = array_slice($this->array, 1, 4);
    $smallest = array_slice($this->array, 0, 4);
    return [array_sum($smallest), array_sum($biggest)];
  }
  
  public function highestFrequency()
  {
    $uniq  = array_unique($this->array);
    $newArray = array_count_values($this->array);
    $biggest = max($newArray);
    $highestFrequency = array_keys($newArray, $biggest);
    return min($highestFrequency);
  }
}

