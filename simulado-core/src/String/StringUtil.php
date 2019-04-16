<?php
namespace String;
class StringUtil
{

  public static function repeatedString($s, $n) : int
  {
    $size = floor($n/strlen($s));
    $lack = $n % strlen($s);
    $count = substr_count($s, 'a');
    return ($count * $size) + $lack;
  }

  public static function mirrorSequence($a, $b)
  {
    $arr1 = [];
    for ($i=$a; $i <= $b; $i++) { 
      $arr1[] = $i;
    }
    $first = join('', $arr1);
    $mirror = array_reverse($arr1);
    $final = '';
    for ($j=0; $j < sizeof($mirror); $j++) {
      $final .= strrev($mirror[$j]);
    }
    return $first . $final;
  }

  public static function zeroMeansZero($a, $b)
  {
    $sum = $a + $b;
    $array = str_split($sum);
    $noZero = array_filter($array, function($z) {
      return $z !== "0";
    });
    return join('',$noZero);
  }

  public static function numberOfLeds($number)
  {
    $leds = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];

    for ($i=0; $i < strlen($number); $i++) { 
      $totalLeds[] = $leds[$number[$i]];
    }
    return array_sum($totalLeds);
  }
}
