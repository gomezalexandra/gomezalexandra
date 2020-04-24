<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO;
use App\src\DAO\CommentDAO;
use App\src\DAO\AuthorDAO;
use App\config\Request;
use App\src\constraint\Validation;
use App\src\DAO\UserDAO;
use App\src\model\View;

abstract class Controller
{
    protected $chapterDAO;
    protected $commentDAO;
    protected $authorDAO;
    protected $view;
    protected $get;
    protected $post;
    protected $session;
    protected $userDAO;
    protected $validation;
    protected $twig;
    private $request;

    public function __construct()
    {
        $this->chapterDAO = new ChapterDAO();
        $this->commentDAO = new CommentDAO();
        $this->authorDAO = new AuthorDAO();
        $this->view = new View();
        $this->userDAO = new UserDAO();
        $this->request = new Request();
        $this->validation = new Validation();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
        $this->getTwig();
    }

    private function getTwig() 
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $this->twig = new \Twig\Environment($loader, [
            'cache' => false, //'../cache', TODO modifier pour false quand en dvp
            'debug' => true,
            ]);
        $filterExtract = new \Twig\TwigFilter('extract', function ($string) {
            return substr(htmlspecialchars_decode($string), 0, 100);
        });
        $filterBlankTable = new \Twig\TwigFilter('blankTable', function ($string) {
            return count($string);
        });
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
        //$this->twig->addGlobal('session', $_SESSION); //TODO: passer directement par session?
        $this->twig->addGlobal('session', $this->session);
        $this->twig->addFilter($filterExtract);
        $this->twig->addFilter($filterBlankTable);
        
    }
}