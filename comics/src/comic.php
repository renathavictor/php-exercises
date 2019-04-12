<?php
require 'character.php';

class Comic
{
  private static $characters = [];

  public static function add($character) {
    self::$characters[] = $character;
  }

  public static function names($comic = null) {
    $names = [];
    foreach (self::$characters as $value) {
      if (isset($comic)) {
        if ($value->comic === $comic) {
          $names[] = $value->hero;
        }
      } else {
        $names[] = $value->hero;
      }
    }
    sort($names, SORT_NATURAL | SORT_FLAG_CASE);
    return $names;

  }

  public static function weights($comic = null) {
    $result = 0.0;
    $cont = 0;
    foreach (self::$characters as $value) {
      if (isset($comic)) {
        if ($value->comic === $comic) {
          $result += $value->weight;
          $cont++;
        }
      } else {
        $result += $value->weight;
        $cont++;
      }
    }
    return $result/$cont;
  }

}
