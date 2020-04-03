<?php

require '../config/dev.php';
require '../config/Autoloader.php';
require '../config/Router.php';

session_start();

$router = new \App\config\Router();
$router->run();

