<?php

// convertion number to string ot the opposite

$valueString = (string)100;
var_dump($valueString);

$valueNumber = (int)"100";
var_dump($valueNumber);

$valueFloat = (float)"10.10";
var_dump($valueFloat);

// accessing character

$name = "Ridlo";
$age = 19;
echo $name[0] . PHP_EOL;

// curly brace
// this might helpful when i wanna do combine variable with another letters without any space

echo "hallo my name is $name and i am {$age}s old" . PHP_EOL;