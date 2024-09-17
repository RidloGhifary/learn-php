<?php

require_once "./data/Person.php";

define("APPLICATION", "learn-php");
const VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;
