<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$statement = $connection->query($sql);

$success = false;
$find_user = null;

foreach ($statement as $row) {
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
