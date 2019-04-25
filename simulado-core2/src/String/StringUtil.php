<?php
namespace String;

class StringUtil
{

  public static function repeatedString($s, $n): int
  {

    $size = floor($n / strlen($s));
    $lack = $n % strlen($s);

    $count = \substr_count($s, 'a');

    return ($count * $size) + $lack;
  }

  public static function mirrorSequence($a, $b)
  {
    $list = '';
    foreach (range($a, $b) as $number) {
      $list .= $number;
    }
    return $list.strrev($list);
  }

  public static function zeroMeansZero($a, $b)
  {
    $sum = (string) $a + $b;
    $noZero = str_replace('0', '', $sum);

    return $noZero;
  }

  public static function numberOfLeds($number)
  {
    $leds = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];

    $count = 0;

    for ($i=0; $i < strlen($number); $i++) { 
      $count += $leds[$number[$i]];
    }

    return $count;

  }
}

