<?php

namespace WordFrequency;

function split($str, $len = 1)
{
  $arr = [];
  $length = mb_strlen($str, 'UTF-8');

  for ($i = 0; $i < $length; $i += $len) {
    $arr[] = mb_substr($str, $i, $len, 'UTF-8');
  }
  return $arr;
}

class WordFrequency
{
  public static function stats($text) {
    $lowText = mb_convert_case($text, MB_CASE_LOWER, "UTF-8");
    $textArray = split($lowText);
    $count = array_count_values($textArray);

    $result = [];
    foreach ($count as $key => $value) {
      if (array_key_exists($value, $result)) {
        array_push($result[$value], $key);
        sort($result[$value]);
      } else {
        $result[$value] = [$key];
      }
    }
    ksort($result);
    return $result;
    
  }
}

