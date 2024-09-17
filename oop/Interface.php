<?php

require_once "./data/Cars.php";

use Data\{Avanza};

$car = new Avanza();
$car->drive();
$car->getTire();
