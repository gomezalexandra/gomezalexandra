<?php
namespace App\config;

use App\src\controller\FrontController;
use App\src\controller\BackController;
use App\src\controller\ErrorController;
use Exception;

class Router
{
    private $request;
    private $frontController;
    private $backController;
    private $errorController;

    public function __construct()
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
            if(isset($route))
            {
                if($route === 'chapter') {
                    $this->frontController->chapter($this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'allChapters'){
                    $this->frontController->allChapters();
                }
                elseif($route === 'author'){
                    $this->frontController->author();
                }
                elseif($route === 'newChapter'){
                    $this->backController->newChapter($this->request->getPost());
                }
                elseif($route === 'modifyChapter'){
                    $this->backController->modifyChapter($this->request->getPost(), $this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'publish'){
                    $this->backController->publishChapter($this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'deleteChapter'){
                    $this->backController->deleteChapter($this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'addComment'){
                    $this->frontController->addComment($this->request->getPost(), $this->request->getGet()->get('chapterId'), $this->request->getSession()->get('id'));
                }
                elseif($route === 'flagComment'){
                    $this->frontController->flagComment($this->request->getGet()->get('commentId'), $this->request->getGet()->get('chapterId'));
                }
                elseif($route === 'unflagComment'){
                    $this->backController->unflagComment($this->request->getGet()->get('commentId'));
                }
                elseif($route === 'deleteComment'){
                    $this->backController->deleteComment($this->request->getGet()->get('commentId'), $this->request->getGet()->get('chapterId'));
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
                elseif($route === 'deleteAccount'){
                    $this->backController->deleteAccount();
                }
                elseif($route === 'deleteUser'){
                    $this->backController->deleteUser($this->request->getGet()->get('userId'));
                }
                elseif($route === 'administration'){
                    $this->backController->administration();
                }
                elseif($route === 'modifyAuthor'){
                    $this->backController->modifyAuthor($this->request->getPost());
                }
                elseif($route === 'modifyPresentation'){
                    $this->backController->modifyPresentation($this->request->getPost());
                }
                else{
                    $this->errorController->error404();
                }
            }
            else{
               $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->error500();
        }
    }
}


