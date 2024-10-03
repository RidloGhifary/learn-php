<?php

session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] === false) {
  header("Location: /session/login.php");
  exit();
}

$say = "Hello " . $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member</title>
</head>

<body>
  <h3><?= htmlspecialchars($say) ?></h3>
  <a href="/session/logout.php">Logout</a>
</body>

</html>