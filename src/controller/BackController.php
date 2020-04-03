<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO;
use App\config\Parameter;

class BackController extends Controller
{

    public function newChapter(Parameter $post)
    {
        if($post->get('send')) { //f(isset($post['send'])) {
            $this->chapterDAO->newChapter($post);
            //$chapterDAO = new ChapterDAO();
            //$chapterDAO->newChapter($post);
            header('Location: ../public/index.php');
        }
        header('Location: ../public/index.php'); // si pas de nouveau chapitre
    }
}