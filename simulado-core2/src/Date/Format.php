<?php
namespace Date;

class Format
{
  public static function long($date)
  {
    if (strlen($date) === 10 && strstr($date, '/')) {
      $dates = \explode('/', $date);
      $months = ['01'=> 'janeiro', '02'=> 'fevereiro', '03'=> 'março', '04' => 'abril', '05' => 'maio', '06' => 'junho', '07'=> 'julho', '08'=> 'agosto', '09'=> 'setembro', '10' => 'outubro', '11'=> 'novembro', '12'=> 'dezembro'];
      return $dates[0].' de '.$months[$dates[1]]. ' de '.$dates[2];
    } else {
      return 'Invalid data input';
    }
  }
}

