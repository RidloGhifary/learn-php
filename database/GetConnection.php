<?php

function getConnection(): PDO
{
  $host = "host.docker.internal";
  $port = 3306;
  $database = "belajar_php_database";
  $username = "root";
  $password = "1234Ridlo";


  return  new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
