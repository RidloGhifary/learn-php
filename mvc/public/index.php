<?php

require_once __DIR__ . "/../vendor/autoload.php";

use RidloAchmadGhifary\Learn\PHP\MVC\App\Router;
use RidloAchmadGhifary\Learn\PHP\MVC\Controller\HomeController;

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/hello", HomeController::class, "hello");
Router::add("GET", "/world", HomeController::class, "world");

Router::run();
