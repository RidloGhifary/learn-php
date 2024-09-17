<?php

require_once "./data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Ridlo");

$vp = new VicePresident();
$vp->name = "Joko";
$vp->sayHello("Ridlo");
