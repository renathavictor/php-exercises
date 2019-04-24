<?php

function halfTriangle($size)
{

  $result = '';
  $char = '#';
  foreach (range(1,$size) as $number) {
    $result .= $size === 1 ? $char : str_repeat('#', $number);
    $result .= "\n";
  }
  return $result;

}


function triangleText($size)
{
  $result = '';
  $hash = '#';
  $empty = $size-1;
  foreach (range(1,$size) as $number) {
    $linha = $size === 1 ? $hash : str_repeat('#', $number);
    $space = $size === 1 ? $hash : str_repeat(' ', $empty--);
    $result .= $size === 1 ? $linha.'' : $linha.$space."\n";
  }
  return trim($result, " \n");
}



function halfDiamondText($size)
{
  // TODO
}

function diamondText($size)
{
  // TODO
}

function boardText($size)
{
  // TODO
}
