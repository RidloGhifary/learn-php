<?php

// recursive is a function that call function it self
// this might helpfull to solve a problem like factorial

// example code of factorial without recursive

function factorialWithoutRecursive(int $value): int{
  $total = 1;
  for ($i = 1; $i <= $value; $i++) { 
    $total *= $i;
  };
  return $total;
}

echo factorialWithoutRecursive(6) . PHP_EOL;

// exaple code of factorial with recursive

function factorialWithRecursive(int $value): int{
  if($value == 1){
    return 1;
  }else{
    return $value * factorialWithRecursive($value - 1);
  };
}

var_dump(factorialWithRecursive(6));

// problem with recursive is when happpen memory overflow
// example of memory overflow by doing recursive

function loop(int $value){
  if($value == 1){
    echo "done" . PHP_EOL;
  }else{
    echo "Loop-{$value}" . PHP_EOL;
    loop($value - 1);
  };
}

loop(3000000);