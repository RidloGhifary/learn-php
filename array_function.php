<?php

// build in array function in php are so many
// reference : https://www.php.net/manual/en/ref.array.php
// array_key : take the keys of an array
// array_value : take the value of an array
// array_map : change all the array data with callback
// sort : sorting array
// rsort : reverse sorting array
// shuffle : randomtly change the array position

$data = [12,3,4,45,5,6,67,7,7676,9];

var_dump(array_map(function($data){
  return $data * 2;
}, $data));

sort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));