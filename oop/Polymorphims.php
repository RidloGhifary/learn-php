<?php

require_once "./data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Ridlo");
var_dump($company);

$company->programmer = new BackendProgrammer("Ridlo");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ridlo");
var_dump($company);

sayHelloProgrammer(new BackendProgrammer("Ridlo"));
