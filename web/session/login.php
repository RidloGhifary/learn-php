<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
  header("Location: /session/member.php");
  exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  if ($_POST['username'] == 'ridlo' && $_POST['password'] == 'ridlo') {
    $_SESSION['login'] = true;
    $_SESSION['username'] = 'ridlo';
    header("Location: /session/member.php");
    exit();
  } else {
    $error = "Login Failed";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Login</h3>
  <?php
  if ($error != "") {
    echo "<p>$error</p>";
  }
  ?>
  <form action="/session/login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password">
    <br>
    <input type="submit" value="Login">
  </form>
</body>

</html>