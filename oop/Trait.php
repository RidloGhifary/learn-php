<?php

require_once "./data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Ridlo");
$person->sayHello("Ridlo");
$person->name = "Ridlo";

var_dump($person);
