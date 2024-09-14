<?php

// block is a bunch of statement that more or equal 1
// start with a { and end with a }

function runApp(string $name){
  echo "Start program" . PHP_EOL;
  echo "Hallo $name" . PHP_EOL;
  echo "End program" . PHP_EOL;
}

runApp("Ridlo");