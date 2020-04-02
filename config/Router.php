<?php
namespace App\config;
//require  '..\src\controller\FrontController.php';

use App\src\controller\FrontController;
use \App\config\Autoloader;
use Exception;

Autoloader::register();

class Router
{
    private $frontController;

    public function __construct() //pour ne pas répéter l'appel au front controller
    {
        $this->frontController = new FrontController();
    }

    public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'chapter'){
                    //$frontController = new FrontController();
                    $this->frontController->chapter($_GET['chapterId']);
                }
                else{
                    echo 'Page d\'erreur';
                }
            }
            else{
                //$frontController = new FrontController();
               $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            echo 'Page d\'erreur';
        }
    }
}