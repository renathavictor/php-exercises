<?php

function sum($array)
{
  return array_sum($array);
}

function product($array)
{
  $result = 1;
  foreach ($array as $value) {
    $result *= $value;  
  }
  return $result;
}

function sumOdds($array)
{
  $result = 0;
  foreach ($array as $value) {
    if ($value & 0x1) {
      $result += $value;  
    }
  }
  return $result;
}
