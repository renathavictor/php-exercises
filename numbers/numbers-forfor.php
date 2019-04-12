<?php
  $result = '';
  foreach (range(0,9) as $first) {
    foreach (range(0,9) as $second) {
      $space = $second === 9 ? "\n" : " ";
      $result .= $first . $second .$space;
        
    }
  }
  echo $result;
?>