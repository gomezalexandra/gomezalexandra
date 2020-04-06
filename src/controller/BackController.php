<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO; 
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
            $this->session->set('modify_chapter', 'Le chapitre a été modifié'); //apparait dans home.php
            header('Location: ../public/index.php');
        }
        require '../templates/modify_chapter.php';
    }

    public function deleteChapter($chapterId)
    {
        $this->chapterDAO->deleteChapter($chapterId);
        $this->session->set('delete_chapter', 'Le chapitre a bien été supprimé');
        header('Location: ../public/index.php');
    }

    public function deleteComment($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');
        header('Location: ../public/index.php');
    }

    public function profile()
    {
        require '../templates/profile.php';
    }

    public function updatePassword(Parameter $post)
    {
        if($post->get('submit')) {
            $this->userDAO->updatePassword($post, $this->session->get('pseudo'));
            $this->session->set('password', 'Le mot de passe a été mis à jour');
            header('Location: ../public/index.php?route=profile');
        }
        require '../templates/password.php';
    }

    public function logout()
    {
        $this->session->stop();
        $this->session->start();
        $this->session->set('logout', 'À bientôt');
        header('Location: ../public/index.php');
    }
}