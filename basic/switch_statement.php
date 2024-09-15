<?php

// switch statement only for == is_equal comparison

$grade = "A";

switch($grade){
  case "A":
    echo "You passed with $grade" . PHP_EOL;
    break;
  case "B":
    echo "You passed with $grade" . PHP_EOL;
    break;
  case "C":
    echo "You failed with $grade" . PHP_EOL;
    break;
  default:
    echo "You failed with $grade" . PHP_EOL;
}

// syntax aternative

switch($grade):
  case "A":
    echo "You passed with $grade" . PHP_EOL;
    break;
  case "B":
    echo "You passed with $grade" . PHP_EOL;
    break;
  case "C":
    echo "You failed with $grade" . PHP_EOL;
    break;
  default:
    echo "You failed with $grade" . PHP_EOL;
endswitch;