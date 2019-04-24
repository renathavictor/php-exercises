<?php

// BMI = weight/height²

$weight = 60.0;
$height = 1.65;
$result;

$bmi = $weight / pow($height, 2);

if ($bmi < 18.5) {
  $result = 'Underweight';
} elseif ($bmi <= 24.9) {
  $result = 'Normal weight';
} elseif ($bmi <= 29.9) {
  $result = 'Overweight';
} else {
  $result = 'Obesity';
}

echo "BMI: {$bmi}\nResult: {$result}";

// Output:
//  BMI: 22.038567493113
//  Result: Normal weight
