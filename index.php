<?php

// Loops

$data = [
  [
    "name" => "Nipa",
    "salary" => 6000,
    "programmer" => true
  ],
  [
    "name" => "Udin",
    "salary" => 3000,
    "programmer" => false
  ],
  [
    "name" => "Syarif",
    "salary" => 13000,
    "programmer" => true
  ]
];

foreach ($data as $key => $item) {
  var_dump($item["name"]);
  var_dump($key);
}

for($i = 0; $i < 5; $i++) {
  var_dump($i);
}

$counter = 0;

while($counter < 5) {
  var_dump($counter);

  $counter++;
}

$counter2 = 10;

do {
  var_dump($counter2);

  $counter2--;
} while ($counter2 > 0);
