<?php

function factorial2($number)
{
  $aux = 1;
  foreach (range(1,$number) as $fact) {
    $aux *= $fact;
  }
  return $aux;
}

function factorial($number)
{
  if ($number > 0) {
    return $number * factorial($number-1);
  } else {
    return 1;
  }
}

?>
