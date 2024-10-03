<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";

$statement = $connection->prepare($sql);
$statement->bindParam(":username", $username);
$statement->bindParam(":password", $password);
$statement->execute();

$result = $statement->fetchAll();

var_dump($result);

$success = false;
$find_user = null;

foreach ($result as $row) {
  // Success
  $success = true;
  $find_user = $row["username"];
}

if ($success && !is_null($find_user)) {
  echo "Login Success : $find_user" . PHP_EOL;
} else {
  echo "Login Failed" . PHP_EOL;
}

$connection = null;
