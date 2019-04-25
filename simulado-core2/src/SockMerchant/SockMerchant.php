<?php
namespace SockMerchant;

class SockMerchant
{
  public static function sockMerchant($socks): int
  {
    $count = array_count_values($socks);

    $sum = 0;
    foreach ($count as $key => $value) {
      $sum += floor($value/2);
    }
    return $sum;
  }
}
