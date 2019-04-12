<?php

function minimum($array) 
{
  return min($array);
}

function maximum($array) 
{
  return max($array);
}

function rangeValues($length, $last=0, $step=0)
{
  $inicio = !$last ? 0 : $length;
  $fim = !$last ? $length : $last;
  $salto = !$step ? 1 : $step;

  $array = [];
  for ($inicio; $inicio < $fim; $inicio+=$salto) {
    array_push($array, $inicio);
  }
  return $array;
}


function zip(...$arrays) 
{
  $result = [];
  for ($index = 0; $index < sizeof($arrays); $index++) {
    $line = [];
    for ($ind = 0; $ind < sizeof($arrays); $ind++) {
      $line[] = $arrays[$ind][$index];
    }
    $result[] = $line;
  }
  return $result;
}


function uniq($array) 
{
  $result = [];
  foreach ($array as $value) {
    if (!in_array($value, $result)) {
      array_push($result, $value);
    }
  }
  return $result;
}

function sortNum($array) 
{
  sort($array);
  return $array;
} 