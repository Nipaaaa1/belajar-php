<?php

// Functions

function printLine($value) {
  echo $value . "\n";
}

$num = 10;

printLine($num);

// Typed functions
function add(int $val1, int $val2): int {
  return $val1 + $val2;
}

printLine(add(5, 20));

$sum = function(int $num1, $num2): int {
  return $num1 + $num2;
};

printLine($sum(5, 20));

