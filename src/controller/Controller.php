<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO;
use App\src\DAO\CommentDAO;
use App\config\Request;
use App\src\DAO\UserDAO;
use App\src\model\View;

abstract class Controller
{
    protected $chapterDAO;
    protected $commentDAO;
    protected $view;
    protected $get;
    protected $post;
    protected $session;
    protected $userDAO;
    private $request;

    public function __construct()
    {
        $this->chapterDAO = new ChapterDAO();
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
        $this->userDAO = new UserDAO();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}