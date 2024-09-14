<?php

// the problem with PHP is we need to check whether the data exist or not, the value is null or not.
// normally its can be done with if statement using isset function
// fortunately there is a null coalescing in php 
// defined with double qustion mark ??

// exmple code without null coalescing
$data = [];

if(isset($data["action"])){
  $action = $data["action"];
}else{
  $action  = "nothing";
};

echo $action . PHP_EOL;

// example code with null coalescing;

$data = ["action" => "hello"];

$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;