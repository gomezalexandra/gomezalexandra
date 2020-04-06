<?php
namespace App\config;
//require  '..\src\controller\FrontController.php';

use App\src\controller\FrontController;
use App\src\controller\BackController;
use App\src\controller\ErrorController;
use \App\config\Autoloader;
use Exception;

Autoloader::register();

class Router
{
    private $request;
    private $frontController;
    private $backController;
    private $errorController;

    public function __construct() //pour ne pas répéter l'appel au front controller
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');
        try{
            if(isset($route)) //(isset($_GET['route']))
            {
                if($_GET['route'] === 'chapter'){
                    //$frontController = new FrontController();
                    $this->frontController->chapter($this->request->getGet()->get('chapterId')); // $this->frontController->chapter($_GET['chapterId']);
                }
                elseif($_GET['route'] === 'writteChapter'){
                    require '../templates/new_chapter.php';
                }
                elseif($_GET['route'] === 'newChapter'){
                    $this->backController->newChapter($this->request->getPost());//$this->backController->newChapter($_POST);
                }
                /*elseif($_GET['route'] === 'editChapter'){
                    require '../templates/modify_chapter.php';
                }*/
                elseif($_GET['route'] === 'modifyChapter'){
                    $this->backController->modifyChapter($this->request->getPost(), $this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'deleteChapter'){
                    $this->backController->deleteChapter($this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'addComment'){
                    $this->frontController->addComment($this->request->getPost(), $this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'flagComment'){
                    $this->frontController->flagComment($this->request->getGet()->get('commentId'));
                }
                elseif($route === 'deleteComment'){
                    $this->backController->deleteComment($this->request->getGet()->get('commentId'));
                }
                elseif($route === 'register'){
                    $this->frontController->register($this->request->getPost());
                }
                elseif($route === 'login'){
                    $this->frontController->login($this->request->getPost());
                }
                elseif($route === 'profile'){
                    $this->backController->profile();
                }
                elseif($route === 'updatePassword'){
                    $this->backController->updatePassword($this->request->getPost());
                }
                elseif($route === 'logout'){
                    $this->backController->logout();
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