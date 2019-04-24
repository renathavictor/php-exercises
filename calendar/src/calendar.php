<?php

/** calendar
 * $beginWeek: 0..6 - 0(DOM), 1(SEG), 2(TER), 3(QUA), 4(QUI), 5(SEX), 6(SAB)
 * $endDay: 28..31
 */
function calendar($beginWeek, $endDay)
{
  $result = '';
  foreach (range(1, $endDay) as $day) {
    $days = $day < 10 ? '0'.$day : $day; 
    $space = ($day+$beginWeek) % 7 === 0 ? "\n" : ' ';
    $result .= ' ' .$days .$space;
  }
  $beginSpace = $beginWeek !== 0 ? str_repeat('  ', $beginWeek*2) : '';
  return "DOM SEG TER QUA QUI SEX SAB\n". $beginSpace .substr_replace($result, '', -1);
  
}

