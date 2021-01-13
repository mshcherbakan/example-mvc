<?php

use App\Exception\CustomValidationException;
use App\Utils\Router;

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// add autoload
// add new line test
// new place for conflict
// added from develop
// add new row
// add one more
require 'autoload.php';

$autoloader = new Psr4AutoloaderClass();
$autoloader->addNamespace('App', __DIR__ . '/../src');
$autoloader->register();

require __DIR__ . '/../helpers.php';

$router = new Router();
$router->process();




echo 'OK';




echo 'OK';