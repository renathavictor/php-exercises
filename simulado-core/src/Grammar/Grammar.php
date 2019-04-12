<?php
namespace Grammar;

class Grammar
{
  public static function spelling($word)
  {
    $noSpace = str_replace(' ', '',  $word);
    $result = '';
    for ($index = 0; $index < strlen($noSpace); $index++) {
      if ($index !== strlen($noSpace)-1) {
        $result .= $noSpace[$index] . '-';
      } else {
        $result .= $noSpace[$index];
      }  
    }
    return strtoupper($result);
  }
}
