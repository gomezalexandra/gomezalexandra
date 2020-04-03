<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO; // nécessaire?
use App\config\Parameter;

class BackController extends Controller
{

    public function newChapter(Parameter $post)
    {
        if($post->get('submit')) { //garder le meme post/get que pour fonction modifyChapter et que dans form_chapter.php sinon ko
            $this->chapterDAO->newChapter($post);
            $this->session->set('new_chapter', 'Nouveau chapitre publié!'); //apparait dans home.php
            //$chapterDAO = new ChapterDAO();
            //$chapterDAO->newChapter($post);
            header('Location: ../public/index.php');
        }
        header('Location: ../public/index.php'); // si pas de nouveau chapitre
    }

    public function modifyChapter(Parameter $post, $chapterId)
    {
        $chapter = $this-> chapterDAO-> getChapter($chapterId);
        if($post->get('submit')) {
            $this->chapterDAO->modifyChapter($post, $chapterId);
            $this->session->set('modify_chapter', 'L\' article a été modifié'); //apparait dans home.php
            header('Location: ../public/index.php');
        }
        require '../templates/modify_chapter.php';
    }
}