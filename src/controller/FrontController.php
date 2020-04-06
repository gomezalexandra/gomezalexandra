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

    public function register(Parameter $post)
    {
        if($post->get('submit')) {
            //TODO: verifier si speudo existe déjà.
            $this->userDAO->register($post);
            $this->session->set('register', 'Votre inscription a bien été effectuée');
            header('Location: ../public/index.php');    
        }
        require '../templates/register.php';
    }

    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->userDAO->login($post);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Content de vous revoir');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('pseudo', $post->get('pseudo'));
                $this->session->set('role', $result['result']['name']);
                header('Location: ../public/index.php');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
            }
        }
        require '../templates/login.php';
    }
}