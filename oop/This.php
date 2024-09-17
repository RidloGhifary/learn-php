<?php

require_once "./data/Person.php";

$person = new Person();
$person->name = "Ghifary";
$person->sayHello("Ridlo");
$person->sayHello(null);
