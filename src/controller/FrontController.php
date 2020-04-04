<?php
namespace App\src\controller;

//use App\src\controller\Controller;
use App\src\DAO\ChapterDAO;
use App\src\DAO\CommentDAO;
use App\config\Parameter;

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

    public function addComment(Parameter $post, $chapterId)
    {
        if($post->get('submit')) {
            $this->commentDAO->addComment($post, $chapterId);
            $this->session->set('add_comment', 'Le nouveau commentaire a bien été ajouté');
            header('Location: ../public/index.php?route=chapter&chapterId='.$chapterId);
        }
    }

    public function flagComment($commentId)
    {
        $this->commentDAO->flagComment($commentId);
        $this->session->set('flag_comment', 'Le commentaire a bien été signalé');
        header('Location: ../public/index.php');
    }
}