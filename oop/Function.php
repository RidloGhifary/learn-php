<?php

require_once "./data/Person.php";

$person = new Person("Ridlo", "Jakarta");
$person->sayHello("Ridlo");
$person->info();
