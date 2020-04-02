<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO;
use App\src\DAO\CommentDAO;

class FrontController
{
    private $chaptersDAO;
    private $commentDAO;

    public function __construct() // pour éviter de se répéter dans les fonctions
    {
        $this->chaptersDAO = new ChapterDAO();
        $this->commentDAO = new CommentDAO();
    }

    public function home()
    {
        //$chapters = new ChapterDAO();
        $allChapters = $this-> chaptersDAO ->getChapters();
        require '../templates/home.php';
    }

    public function chapter($chapterId)
    {
        //$chapters = new ChapterDAO();
        $allChapters = $this-> chaptersDAO-> getChapter($chapterId);
        //$comment = new CommentDAO();
        $comments = $this-> commentDAO-> getChapterComment($chapterId);
        require '../templates/single.php';
    }
}
        //$comment = new CommentDAO();
        //$comments = $comment->getChapterComment($_GET['chapterId']);