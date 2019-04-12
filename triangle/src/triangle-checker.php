<?php

function triangleChecker($a, $b, $c)
{
  if ($a > 0 && $b > 0 && $c > 0) {
    if (($a + $b > $c) && ($a + $c > $b) && ($c + $b > $a)) {
      if ($a !== $b && $b !== $c && $a !== $c) {
        return 'scalene';
      } elseif ($a === $b && $a === $c) {
        return 'equilateral';
      } else {
        return 'isosceles';
      }
    } else {
      return 'none';
    }
  } else {
    return 'none';
  }
}


