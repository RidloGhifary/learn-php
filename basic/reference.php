<?php

// what the fuck is reference
// reference is accessing the same varibale with different variable named
// this can be done with "&" character

$name = "Ridlo";

$otherName = &$name;
$otherName = "Ghifary";

echo $name . PHP_EOL; // output : ghifary

// passing data with references

function foo(int &$value){
  $value++;
};

$counter = 1;
foo($counter);
foo($counter);
foo($counter);

echo $counter . PHP_EOL;