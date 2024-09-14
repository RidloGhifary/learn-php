<?php

// break forcing to stop looping
// while continue ued to stop looping at a moment

// simple break code

$counter = 1;

while(true){
  echo "Counter $counter" . PHP_EOL;
  $counter++;

  if($counter > 10){
    break;
  }
}

// simple continue code

for ($counter = 0; $counter  <= 100 ; $counter ++) { 
  if($counter % 2 ===0){
    continue;
  };
  echo "Counter $counter" . PHP_EOL;
};