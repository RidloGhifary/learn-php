<?php

require_once "./data/Person.php";

$person = new Person("Ridlo", "Jakarta");
$person->country = "Malaysia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;

$person2 = new Person();
$person2->name = "Ridlo 2"; // error
$person2->city = "Surakarta";

var_dump($person2);

echo "Name : $person2->name" . PHP_EOL;

$person3 = new Person();
$person3->name = "Ridlo 2"; // error
// $person3->city = "Surakarta"; // default null value

var_dump($person3);

echo "Name : $person3->name" . PHP_EOL;
