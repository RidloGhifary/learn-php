<?php

$score = 50;
$absent = 50;

if($nilai >= 75 && $absent >= 80){
  echo "You passed" . PHP_EOL;
}elseif($nilai <= 50 && $absent <=50){
  echo "You failed" . PHP_EOL;
}else{
  echo "You stayed" . PHP_EOL;
}

// other way to do if else statement

if($nilai >= 75 && $absent >= 80) :
  echo "You passed" . PHP_EOL;
elseif($nilai <= 50 && $absent <=50) :
  echo "You failed" . PHP_EOL;
else :
  echo "You stayed" . PHP_EOL;
endif;