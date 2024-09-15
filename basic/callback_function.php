<?php

// callback is a mechanism to call another function within the function argument / parameter
// callable can be used to defined callback function as a data type
// and for calling that callback, it can be done by using "call_user_func" function

function sayHello(string $name, callable $filter){
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
};

sayHello("Ridlo", function($name) {return strtoupper($name);});
sayHello("Ridlo", "strtoupper");
sayHello("Ridlo", "strtolower");