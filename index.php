<?php

// Arrays
$array = [1, 2, 3];

// Asociative Array
$aarray = [
  "name" => "Nipa",
  "job" => "Programmer"
];

var_dump($array);
var_dump($aarray);

echo $array[0];
echo $aarray["job"];

// Manipulating array

// Add array
$array[] = 4;

var_dump($array);

// Delete array item
unset($array[1]);

var_dump($array);
