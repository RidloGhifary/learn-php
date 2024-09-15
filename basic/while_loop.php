<?php

// while is a simpler version of for loop

$counter = 1;

while($counter <= 10){
  echo "Counter $counter" . PHP_EOL;
  $counter++;
};

// syntax alternative

while($counter <= 10) :
  echo "Counter $counter" . PHP_EOL;
  $counter++;
endwhile;