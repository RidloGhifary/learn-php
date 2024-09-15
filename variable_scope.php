<?php

// php has 3 different type of scope
// global, local, static

// global scope is a variable that created outside the function
// so that its cant be called inside the function, and only for outside the function

// local scopre is a varibale that created inside the function
// means that variable only can be acccesed inside the function

// global keyword
// there is a way to access global score within the function
// by using global keyword
// example code of global keyword

$name = "ridlo";

function sayHello(){
  global $name;
  echo "Hello $name". PHP_EOL;
};

sayHello();

// static scope
// as a default local scope only has once life when that function being called
// after that the local scope will be gone
// php has something called static scope that only can be defined in the local scope
// its something like the static scope has the previous value after the function baing called again and again

function increment(){
  static $counter = 1;
  echo "Counter : $counter" . PHP_EOL;

  $counter++;
}

increment(); // 1
increment(); // 2
increment(); // 3