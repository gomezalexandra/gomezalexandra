<?php 
require '../vendor/autoload.php';
require '../config/dev.php';
require '../config/Router.php';



//if (isset($_GET['route'])){
//    $page = $_GET['route'];
//}

session_start();

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false, //'../cache', //modifier pour false quand en dvp
]);

$router = new \App\config\Router();
$router->run($twig);




/*if ($page === 'test') {
    echo $twig->render('test.php');
}*/