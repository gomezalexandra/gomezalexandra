<?php
namespace App\config;
//require  '..\src\controller\FrontController.php';

use App\src\controller\FrontController;
use App\src\controller\ErrorController;
use \App\config\Autoloader;
use Exception;

Autoloader::register();

class Router
{
    private $frontController;
    private $errorController;

    public function __construct() //pour ne pas répéter l'appel au front controller
    {
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
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
                    $this->errorController->error404();
                }
            }
            else{
                //$frontController = new FrontController();
               $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->error500();
        }
    }
}