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
    $begin = array_slice($this->array, 0, $d);
    $end = array_slice($this->array, $d);

    return array_merge($end, $begin);
  }

  public function stats()
  {
    /* $bigger = 0;
    $equal = 0;
    $smaller = 0; */
            // b, e, s 
    $result = [0, 0, 0];
    foreach ($this->array as $value) {
      if ($value > 0) {
        $result[0]++;
      } else if ($value < 0) {
        $result[2]++;
      } else {
        $result[1]++;
      }
    }
    $big = \number_format($result[0]/sizeof($this->array), 6);
    $equal = \number_format($result[1]/sizeof($this->array), 6);
    $small= \number_format($result[2]/sizeof($this->array), 6);
    
    return [$small, $equal, $big];

  }

  public function minMaxSum()
  {
    sort($this->array);
    $begin = array_slice($this->array, 0, 4);
    $end = array_slice($this->array, 1, 5);
    
    return [array_sum($begin), array_sum($end)];
  }

  public function highestFrequency()
  {
    $counts = array_count_values($this->array);

    //arsort($counts);
    $big = max($counts);
    $frequency = array_keys($counts, $big);
    
    return min($frequency);
  }
}

