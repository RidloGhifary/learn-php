<?php

$params = isset($_GET["first-name"]) || isset($_GET["last-name"])
  ? htmlspecialchars($_GET["first-name"]) . " " . htmlspecialchars($_GET["last-name"])
  : null;

$numbers = isset($_GET['numbers']) ? $_GET['numbers'] : [];
$total = 0;
$math = "";
$calculate = $math . $total ? $total : null;

foreach ($numbers as $key => $number) {
  $total += $number; // Sum the numbers
  $math .= $number; // Append the number to the math string

  if ($key < count($numbers) - 1) {
    $math .= " + "; // Add a plus sign after each number except the last
  }
}

$say = $params ? "Hello " . $params : "Hello World";
error_log("Params: " . print_r($params, true));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p><?= $say ?></p>
  <p><?= $calculate ?></p>

  <script>
    // Use PHP to output the value in JavaScript
    const params = <?= json_encode($_GET) ?>;
    console.log(params);
  </script>
</body>

</html>