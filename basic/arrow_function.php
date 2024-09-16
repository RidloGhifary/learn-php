<?php

// arrow function similar to anonymous function but for simpler version
// arrow function does not have to use "use" for accessing varibale outside closure
// this feature only available on php version 7.4 or higher
// arrow function uses fn keyword to define an arrow function

$firstName = "ridlo";
$lastName = "ghifary";

$sayHello = fn () => "Hello $firstName $lastName";

echo $sayHello() . PHP_EOL;
