<?php 
require '../vendor/autoload.php';
require '../config/dev.php';
require '../config/Router.php';

session_start();

$router = new \App\config\Router();
$router->run();
