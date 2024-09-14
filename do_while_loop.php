<?php

// do while version better than while loop in case its need something to run for at least once
// before checking the condition

$counter = 1;

do{
  echo "Counter $counter" . PHP_EOL;
  $counter++;
}while($counter < 1);