<?php
namespace Grammar;

class Grammar
{
  public static function spelling($word)
  {
    $str = mb_convert_case($word, MB_CASE_UPPER, "UTF-8");
    $noSpace = str_replace(' ', '', $str);
    $array = preg_split('//u', $noSpace, -1, PREG_SPLIT_NO_EMPTY);
    return join('-', $array);
  }
}
