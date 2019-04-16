<?php
namespace Grammar;

class Grammar
{
  public static function spelling($word)
  {
    $words = preg_split('//u', $word, 0, PREG_SPLIT_NO_EMPTY);
    $noSpace = array_filter($words, function($space) {
      return $space !== " ";
    });
    $final = join("-", $noSpace);
    return mb_convert_case($final, MB_CASE_UPPER, "UTF-8");
  }
}

