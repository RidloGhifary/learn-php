<?php

$array = [
  "firstname" => "Ridlo",
  "middlename" => "achmad",
  "lastname" => "ghifary"
];

$object = (object)$array;

var_dump($object);

echo $object->firstname . PHP_EOL;
