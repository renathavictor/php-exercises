<?php

  const salary = 3500;

  if (salary <= 1903.98) {
    echo 'Isento de contribuição.';
  } elseif (salary <= 2826.65) {
    $taxRate = 7.5/100;
    $deduction = 142.80;
  } elseif (salary <= 3751.57) {
    $taxRate = 15.0/100;
    $deduction = 354.80;
  } elseif (salary <= 4664.68) {
    $taxRate = 22.5/100;
    $deduction = 636.13;
  } else {
    $taxRate = 27.5/100;
    $deduction = 869.36;
  }

  $tax = salary * $taxRate - $deduction;

  echo 'IRRF: ' .$tax ."\n";
?>