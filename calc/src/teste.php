
<?php
  $string = 'taça';
  $name = 'café';
  $str = 'Esta é uma $string com o meu $name nela.';
  echo $str. "\n";
  eval("\$str = \"$str\";");
  echo $str . "\n";
?>
