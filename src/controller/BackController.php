<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO;

class BackController
{
    public function newChapter($post)
    {
        if(isset($post['send'])) {
            $chapterDAO = new ChapterDAO();
            $chapterDAO->newChapter($post);
            header('Location: ../public/index.php');
        }
        header('Location: ../public/index.php'); // si pas de nouveau chapitre
    }
}