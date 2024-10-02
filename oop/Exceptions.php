<?php

require_once "./exceptions/validateException.php";
require_once "./data/LoginRequest.php";
require_once __DIR__ . "/helpers/validateLoginRequest.php";


$loginRequest = new LoginRequest();
$loginRequest->username = "Ridlo";
$loginRequest->password = "";

try {
  validateLoginRequest($loginRequest);
  echo "Validation passed" . PHP_EOL;
} catch (ValidateException | Exception $exception) {
  echo "Validation error: {$exception->getMessage()}" . PHP_EOL;
}
