<?php
  const size = 10;

  for ($number = 1; $number <= size; $number++) {
    $result += 1 / $number;
  }
  echo "h(".size."): ".$result."\n";
?>