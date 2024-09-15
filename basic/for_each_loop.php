<?php

// for loop can be used to access data array
// but the step by step is way to many
// fortunately there is for each to access data in an array

// simple example using for loop

$names = ["ridlo", "achmad", "ghifary"];

for ($i = 0; $i  < count($names); $i++) { 
  echo "Name : $names[$i]" . PHP_EOL;
}

// simple example using for each

foreach($names as $name){
  echo "Name : $name" . PHP_EOL;
}

// for each with keys

$person = [
  "firsname" => "ridlo",
  "middlename" => "achmad",
  "lastname" => "ghifary",
];

foreach($person as $key => $value){
  echo "$key $value" . PHP_EOL;
};