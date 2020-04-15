<?php
namespace App\src\controller;

use App\src\DAO\ChapterDAO;
use App\src\DAO\userDAO; 
use App\config\Parameter;

class BackController extends Controller
{
    private function checkLoggedIn()
    {
        if(!$this->session->get('pseudo')) {
            $this->session->set('need_login', 'Vous devez vous connecter pour accéder à cette page');
            header('Location: ../public/index.php?route=login');
        } else {
            return true;
        }
    }

    private function checkAdmin()
    {
        $this->checkLoggedIn();
        if(!($this->session->get('role') === 'admin')) {
            $this->session->set('not_admin', 'Vous n\'avez pas le droit d\'accéder à cette page');
            header('Location: ../public/index.php?route=profile');
        } else {
            return true;
        }
    }

    public function newChapter(Parameter $post)
    {
        /*if($this->checkAdmin()) {
            if($post->get('submit')) { //garder le meme post/get que pour fonction modifyChapter et que dans form_chapter.php sinon ko
                $this->chapterDAO->newChapter($post,$this->session->get('id'));
                $this->session->set('new_chapter', 'Nouveau chapitre publié!'); //apparait dans home.php
                //$chapterDAO = new ChapterDAO();
                //$chapterDAO->newChapter($post);
                header('Location: ../public/index.php?route=administration');
            }
            //require '../templates/new_chapter.php'; TODOVIEW
            return $this->view->render('new_chapter', [
                'post' => $post,
                'errors' => $errors
            ]);
        }
        return $this->view->render('new_chapter');*/   

        if($this->checkAdmin()) {
            if ($post->get('submit')) { //garder le meme post/get que pour fonction modifyChapter et que dans form_chapter.php sinon ko
                $errors = $this->validation->validate($post, 'Chapter');
                if (!$errors) {
                    $this->chapterDAO->newChapter($post, $this->session->get('id'));
                    $this->session->set('new_chapter', 'Le nouvel article a bien été ajouté');
                    header('Location: ../public/index.php?route=administration');
                }
                return $this->view->render('new_chapter', [
                    'post' => $post,
                    'errors' => $errors
                ]);
            }
            return $this->view->render('new_chapter', $this->session);
        }
    }

    public function modifyChapter(Parameter $post, $chapterId)
    {
        /*if($this->checkAdmin()) {
            $chapter = $this->chapterDAO-> getChapter($chapterId);
            if($post->get('submit')) {
                //$this->chapterDAO->modifyChapter($post, $chapterId);
                $this->chapterDAO->modifyChapter($post, $chapterId, $this->session->get('id'));
                $this->session->set('modify_chapter', 'Le chapitre a été modifié'); //apparait dans home.php
                header('Location: ../public/index.php?route=administration');
            }
            //require '../templates/modify_chapter.php'; TODOVIEW
            return $this->view->render('modify_chapter', [
                'post' => $post,
                'errors' => $errors
            ]);
        }
        $post->set('id', $chapter->getId());
        $post->set('title', $chapter->getTitle());
        $post->set('content', $chapter->getContent());
        $post->set('author', $chapter->getAuthor());

        return $this->view->render('modify_chapter', [
            'post' => $post
        ]); */
        
        if($this->checkAdmin()) {
            $chapter = $this->chapterDAO->getChapter($chapterId);
            
            if($post->get('submit')) {
                $errors = $this->validation->validate($post, 'Chapter');
                if (!$errors) {
                    $this->chapterDAO->modifyChapter($post, $chapterId, $this->session->get('id'));
                    $this->session->set('modify_chapter', 'L\'article a bien été modifié');
                    header('Location: ../public/index.php?route=administration');
                }
                return $this->view->render('modify_chapter', $this->session, [
                    'post' => $post,
                    'errors' => $errors
                ]);
            }

            $post->set('id', $chapter->getId());
            $post->set('title', $chapter->getTitle());
            $post->set('content', $chapter->getContent());
            $post->set('author', $chapter->getAuthor());

            return $this->view->render('modify_chapter', $this->session, [
                'post' => $post
            ]);
        }
    }

    public function deleteChapter($chapterId)
    {
        if($this->checkAdmin()) {
            $this->chapterDAO->deleteChapter($chapterId);
            $this->session->set('delete_chapter', 'Le chapitre a bien été supprimé');
            header('Location: ../public/index.php?route=administration');
        }
    }

    public function unflagComment($commentId)
    {
        if($this->checkAdmin()) {
            $this->commentDAO->unflagComment($commentId);
            $this->session->set('unflag_comment', 'Le commentaire a bien été désignalé');
            header('Location: ../public/index.php?route=administration');
        }
    }

    public function deleteComment($commentId, $chapterId)
    {
        if($this->checkAdmin()) {
            $this->commentDAO->deleteComment($commentId);
            $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');
            header('Location: ../public/index.php?route=chapter&chapterId='.$chapterId);
        }
    }

    public function profile()
    {
        if($this->checkLoggedIn()) {
            //require '../templates/profile.php'; TODOVIEW
            return $this->view->render('profile', $this->session);
        }    
    }

    public function updatePassword(Parameter $post)
    {
        if($this->checkLoggedIn()) {
            if($post->get('submit')) {
                $this->userDAO->updatePassword($post, $this->session->get('pseudo'));
                $this->session->set('password', 'Le mot de passe a été mis à jour');
                header('Location: ../public/index.php?route=profile');
            }
            //require '../templates/password.php'; TODOVIEW
            return $this->view->render('password', $this->session);
        }
    }

    public function logout()
    {
        if($this->checkLoggedIn()) {
            $this->logoutOrDelete('logout');
        }
    }

    public function deleteAccount()
    {
        if($this->checkLoggedIn()) {
            $this->userDAO->deleteAccount($this->session->get('pseudo'));
            $this->logoutOrDelete('delete_account');
        }
    }

    public function deleteUser($userId)
    {
        if($this->checkAdmin()) {
            $this->userDAO->deleteUser($userId);
            $this->session->set('delete_user', 'L\'utilisateur a bien été supprimé');
            header('Location: ../public/index.php?route=administration');
        }
    }

    private function logoutOrDelete($param)
    {
        $this->session->stop();
        $this->session->start();
        if($param === 'logout') {
            $this->session->set($param, 'À bientôt');
        } else {
            $this->session->set($param, 'Votre compte a bien été supprimé');
        }
        header('Location: ../public/index.php');
    }

    public function administration()
    {
        if($this->checkAdmin()) {
            $chapters = $this->chapterDAO->getChapters();
            $comments = $this->commentDAO->getFlagComments();
            $users = $this->userDAO->getUsers();
           // require '../templates/administration.php'; TODOVIEW
            return $this->view->render('administration', $this->session, [
            'chapters' => $chapters,
            'comments' => $comments,
            'users' => $users
            ]);
        }     
    }
}