
<?php

/**
 * $operator: '+', '-', '*', '/'
 */
function calc($operand1, $operand2, $operator)
{
  switch ($operator) {
    case '+':
      return $operand1 + $operand2;
      break;
    case '-':
      return $operand1 - $operand2;
      break;
    case '*':
      return $operand1 * $operand2;
      break;
      default:
      return $operand1 / $operand2;
      break;
  }
}

function calcWithEval($operand1, $operand2, $operator)
{
  echo eval('return $operand1 .$operator .$operand2;')."\n";
  // Tips echo eval('return 1+1;');
}

?>