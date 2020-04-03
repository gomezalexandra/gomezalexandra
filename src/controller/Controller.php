<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO;
use App\src\DAO\CommentDAO;

abstract class Controller
{
    protected $chapterDAO;
    protected $commentDAO;

    public function __construct()
    {
        $this->chapterDAO = new ChapterDAO();
        $this->commentDAO = new CommentDAO();
    }
}