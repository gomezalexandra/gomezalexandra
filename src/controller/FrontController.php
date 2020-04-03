<?php
namespace App\src\controller;

//use App\src\controller\Controller;
use App\src\DAO\ChapterDAO;
use App\src\DAO\CommentDAO;

class FrontController extends Controller
{
    public function home()
    {
        $chapters = $this-> chapterDAO ->getChapters();
        require '../templates/home.php';
    }

    public function chapter($chapterId)
    {
        $chapter = $this-> chapterDAO-> getChapter($chapterId);
        $comments = $this-> commentDAO-> getChapterComment($chapterId);
        require '../templates/single.php';
    }
}