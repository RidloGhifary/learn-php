<?php

// loop with condition

$counter = 1;

for(; $counter <= 10;){
  echo "Counter $counter" . PHP_EOL;
  $counter++;
};

// loop with initial statement

for($counter = 1; $counter <= 10;){
  echo "Counter $counter" . PHP_EOL;
  $counter++;
};

// loop with post statement

for($counter = 1; $counter <= 10; $counter++){
  echo "Counter $counter" . PHP_EOL;
};

// syntax alternative

for($counter = 1; $counter <= 10; $counter++) :
  echo "Counter $counter" . PHP_EOL;
endfor;