<?php

// example code of anonymous function

$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("ridlo");

// use anonymous function as a argument

function sayGoodBay(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good bay $finalName" . PHP_EOL;
};

sayGoodBay("Ridlo", function (string $name) {
  return strtoupper($name);
});

// defaultly anonymous function cannot access varibale outside the function
// if its want to be done, its need to declare "use" 
// example code

$firstName = "ridlo";
$lastName = "ghifary";

$saySomehing = function () use ($firstName, $lastName) {
  echo "Hallo $firstName $lastName" . PHP_EOL;
};

$saySomehing();
