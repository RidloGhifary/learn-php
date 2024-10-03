<?php

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
  header('Content-Disposition: attachment; filename="photo.jpeg"');
  header("Content-Type: image/jpeg");
  readfile(__DIR__ . "/upload/file/patrick.jpeg");
  exit();
} else {
  echo "Invalid key";
}
