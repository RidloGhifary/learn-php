<?php

// + join 2 arrays
// == true if both array has the same key and value
// === true if both array has the same key, value and index / position
// != true if $a and $b are not same
// !== true if $a and $b are not idectially same

$first = [
  "first_name" => "ridlo"
];

$last = [
  "last_name" => "ghifary"
];

var_dump($first + $last);

$a = [
  "first_name" => "ridlo",
  "middle_name" => "achmad",
  "last_name" => "ghifary"
];

$b = [
  "middle_name" => "achmad",
  "first_name" => "ridlo",
  "last_name" => "ghifary"
];

var_dump($a == $b);
var_dump($a === $b);

var_dump($a != $b);
var_dump($a !== $b);