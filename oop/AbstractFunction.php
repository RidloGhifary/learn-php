<?php

require_once "./data/Animal.php";

use Data\{Cat, Animal};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();
