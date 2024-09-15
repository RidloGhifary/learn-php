<?php

// location function in php is very flexible not as many other programming language
// so it can be create function even tho inside if statement
// on thing to note is function can be used if the function never executed

function sayHello(){
  echo "Hello world" . PHP_EOL;
}

sayHello();
sayHello();

$create = true;

if($create){ // function hi() woudl crash if $create is false
  function hi(){
    echo "Hi!" . PHP_EOL;
  }
}

hi();

// function argument

function sayHi($name){
  echo "Hi $name" . PHP_EOL;
};

sayHi("Ridlo");
sayHi("achmad");
sayHi("ghifary");

// default argument value
// do not use default argument in the first parameter if there is more than one parameter
// because its just useless

function greeting($name = "buddy"){
  echo "Hi {$name}!" . PHP_EOL;
};

greeting();
greeting("ridlo");

// function type declaration
// this feature allow function to only accept particular data type that defined

// example code for type declaration in function parameter

function sum(int $a, int $b){
  $total = $a + $b;
  echo "Total : $total" . PHP_EOL;
};

sum("100", "100");
sum(100, 100);
sum(true, false); // error

// Variable-length Argument List
// this feature basically used to make a function store a lot of parameter in one
// this parameter will be an array

function sumAll(int ...$values){
  $total = 0;
  foreach($values as $value){
    $total += $value;
  };

  echo "Total : " . implode(" + ", $values) . " = $total" . PHP_EOL;
};

sumAll(2,3,4);
sumAll(...[10,20,30]);

// function return value
// defaulty function does not return anything
// to do that so, its need to add return statement

function returnSum(int $a, int $b){
  return $a + $b;
}

$returnSum = returnSum(10,20);
var_dump($returnSum);

// another example of return value

function getFinalValue(int $value){
  if($value >= 80){
    return "A";
  }else{
    return "C";
  };
}

// Return Type Declarations
// this feature doing what type of the value that function returned
// its can be done by adding : after the ()

function returnType(int $value): int{
  return $value;
}

echo returnType(20) . PHP_EOL;


// Variable Function
// php allows to call the funcion as a variable
// simple example code

function foo(){
  echo "FOO" . PHP_EOL;
}

$functionName = "foo";
$functionName();

// example of variable function usage

function saySomething(string $name, $filter){
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

saySomething("Ridlo", "strtoupper");  
saySomething("Ridlo", "strtolower");  