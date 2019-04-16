<?php
namespace SockMerchant;

class SockMerchant
{
  public static function sockMerchant($socks): int
  {
    $uniq  = array_unique($socks);
    // 1, 2, 3
    $newArray = array_count_values($socks);
    // 3, 3, 1

    $count = 0;
    foreach ($newArray as $value) {
      $count += floor($value/2);
    }
    return $count;
  }
}
