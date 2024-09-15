<?php

// using ternary operation can be shorter than if statement
// simple example with if else statement

$gender = "male";
$say_hello = null;

if($gender === "male"){
  $say_hello = "Hi bro!" . PHP_EOL;
}else{
  $say_hello = "Hi sis!" . PHP_EOL;
};

echo $say_hello;

// using ternary operation

$say_hello = $gender === "male" ? "Hi Bro!" : "Hi Sis!";
echo $say_hello . PHP_EOL;