<?php

function addingMatrix($a, $b)
{
  $result = [];
  for ($i=0; $i < sizeof($a); $i++) { 
    $line = [];
    for ($j=0; $j < sizeof($a); $j++) { 
      $line[] = $a[$i][$j] + $b[$i][$j];
    }
    $result[] = $line;
  }
  return $result;

}

function multiplyingMatrix($a, $b)
{
  // TODO
}
