<?php

// there are two ways to define array variable;

$values = array(1,2,3,4,5);

var_dump($values);

$names = ["ridlo", "achmad", "ghifary"];
var_dump($names);

// array operations

// access array by index
var_dump($names[0]);

// change the array value by index
$names[0] = "budi";
var_dump($names);

// insert array to last index
$names[] = "handsome";
var_dump($names);

// remove data array by index
unset($names[1]);
var_dump($names);

// count total data array;
var_dump(count($names));

// array as a map
$biodata = array(
  "firstname" => "ridlo",
  "middlename" => "achmad",
  "lastname" => "ghifary",
  "address" => [
    "city" => "Jakarta",
    "country" => "Indonesia"
  ]
);

var_dump($biodata);
var_dump($biodata["firstname"]);
var_dump($biodata["address"]);
var_dump($biodata["address"]["city"]);