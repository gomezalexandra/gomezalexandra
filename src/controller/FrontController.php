<?php
namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{
    public function home()
    {
        $chapters = $this->chapterDAO ->getLastChapter();
        $presentation = $this->presentationDAO ->getPresentation();
        echo $this->twig->render('home.html.twig', ['chapters'=>$chapters, 'presentation'=>$presentation]);
    }

    public function allChapters()
    {
        $chapters = $this->chapterDAO ->getChapters();
        echo $this->twig->render('all_chapters.html.twig', ['chapters'=>$chapters]);
    }

    public function chapter($chapterId)
    {
        $chapter = $this->chapterDAO-> getChapter($chapterId);
        $comments = $this->commentDAO-> getChapterComment($chapterId);

        if ($chapter) {
            echo $this->twig->render('single.html.twig', ['chapter'=>$chapter, 'comments'=>$comments]);
        }
        else {
            $this->session->set('error_chapter', 'Désolé, ce chapitre n\'existe pas');
            header('Location: ../public/index.php');
        }       
    }

    public function author()
    {
        $author = $this->authorDAO ->getAuthor();
        echo $this->twig->render('author.html.twig', ['author'=>$author]);
    }

    public function addComment(Parameter $post, $chapterId, $pseudo)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Comment');
            if(!$errors) {
                $this->commentDAO->addComment($post, $chapterId, $pseudo);
                $this->session->set('add_comment', 'Le nouveau commentaire a bien été ajouté');
                header('Location: ../public/index.php?route=chapter&chapterId='.$chapterId);
            }
            $chapter = $this->chapterDAO->getChapter($chapterId);
            $comments = $this->commentDAO->getChapterComment($chapterId);
            echo $this->twig->render('single.html.twig', ['chapter'=>$chapter, 'comments'=>$comments, 'post'=>$post, 'errors'=>$errors]);
        }
    }

    public function flagComment($commentId, $chapterId)
    {
        $this->commentDAO->flagComment($commentId);
        $this->session->set('flag_comment', 'Le commentaire a bien été signalé');
        header('Location: ../public/index.php?route=chapter&chapterId='.$chapterId);
    }

    public function register(Parameter $post)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'User');
            if($this->userDAO->checkUser($post)) {
                $errors['pseudo'] = $this->userDAO->checkUser($post);
            }
            if(!$errors) {
                $this->userDAO->register($post);
                $this->session->set('register', 'Votre inscription a bien été effectuée');
                header('Location: ../public/index.php?route=login');
            }
            echo $this->twig->render('register.html.twig', ['post'=>$post, 'errors'=>$errors]);
        }
        echo $this->twig->render('register.html.twig');
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
                $this->session->set('error_login', '* Erreur de pseudo ou de mot de passe');
            }
        }
        echo $this->twig->render('login.html.twig');
    }
}