<?php

// goto php feature allows jump to whenever line of code we want

goto a;
echo "Hello A";

a:
echo 'Hello B';

// example of goto with while loop

$counter = 1;

while(true){
  echo "Counter goto $counter" . PHP_EOL;
  $counter++;

  if($counter >= 10){
    goto b;
  }
}

b:
echo "End counter goto";