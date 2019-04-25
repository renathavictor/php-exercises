<?php

namespace Cipher;

function array_rotate($array, $n)
{
  $length = sizeof($array);
  return \array_merge(\array_slice($array, $n, $length), \array_slice($array, 0, $n));
}

class Cipher
{
 
  public static function rotation($message, $rot) {

    $alpha = 'abcdefghijklmnopqrstuvwxyz';
    $alphabet = \str_split($alpha);
    $messageArray = \str_split($message);
    $arraySubstitution = [];

    $chars = array_rotate($alphabet, $rot);
    print_r($chars);
    foreach ($alphabet as $key => $value) {
      $arraySubstitution[\strtolower($value)] = \strtolower($chars[$key]);
      $arraySubstitution[\strtoupper($value)] = \strtoupper($chars[$key]);
    }

    $result = array_map(
      function ($char) use ($arraySubstitution) {
        return $arraySubstitution[$char] ?? $char;
      }, $messageArray
    );
    return \join('', $result);
  }

  public static function allRots($message) {
    $result = [];
    for ($i=1; $i < 26; $i++) { 
      $result['rot'.$i] = self::rotation($message, $i);
    }
    return ($result);
  }
 
}

$message = 'Dhny é n áeiber cersrevqn qr hz nqzvavfgenqbe qr erqrf? Vcê.';
Cipher::allRots($message);