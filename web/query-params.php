<?php

$params = isset($_GET["first-name"]) && isset($_GET["last-name"])
  ? $_GET["first-name"] . " " . $_GET["last-name"]
  : null;
// var_dump($_GET);
$say = $params ? "Hello " . $params : "Hello World";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?= $say ?>

  <script>
    // Use PHP to output the value in JavaScript
    const params = <?= json_encode($_GET) ?>;
    console.log(params);
  </script>
</body>

</html>