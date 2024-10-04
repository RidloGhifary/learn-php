<?php

require_once __DIR__ . "/vendor/autoload.php";

use RidloGhifary\Data\People;

$people = new People("Ridlo");

echo $people->sayHello("Ghifary") . PHP_EOL;
