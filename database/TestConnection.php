<?php

$host = "host.docker.internal";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "1234Ridlo";

try {
  $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
  echo "Connection Success" . PHP_EOL;
} catch (PDOException $e) {
  echo "Connection Error : $e" . PHP_EOL;
}
