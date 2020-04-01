<?php

require '../config/dev.php';
require '../config/Autoloader.php';
require '../config/Router.php';
//require '../templates/home.php';
//require '../templates/single.php';

$router = new \App\config\Router();
$router->run();

