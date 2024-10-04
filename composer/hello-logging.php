<?php

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Ridlo achmad ghifary');
$log->pushHandler(new StreamHandler('application.log', Level::Warning));

// add records to the log
$log->warning('Hello world');
$log->info('Learn Composer');
$log->error('Error!!!');
