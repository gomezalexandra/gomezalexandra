<?php
namespace App\src\controller;

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
        if($this->checkAdmin()) {
            if ($post->get('submit')) {
                $errors = $this->validation->validate($post, 'Chapter');
                if (!$errors) {
                    if ($post->get('draft')) {
                        $this->chapterDAO->newDraft($post, $this->session->get('id'));
                        $this->session->set('new_chapter', 'Le nouveau chapitre a bien été ajouté aux brouillons');
                    }
                    else { 
                    $this->chapterDAO->newChapter($post, $this->session->get('id'));
                    $this->session->set('add_chapter', 'Le nouveau chapitre a bien été publié'); 
                    }
                    
                    $chapters = $this->chapterDAO->getChapters();
                    $drafts = $this->chapterDAO->getDrafts();
                    $comments = $this->commentDAO->getFlagComments();
                    $users = $this->userDAO->getUsers();
                    echo $this->twig->render('administration.html.twig', ['chapters'=>$chapters, 'drafts' => $drafts, 'comments'=>$comments, 'users' => $users]);
                }
                else {
                    echo $this->twig->render('new_chapter.html.twig', ['post' => $post, 'errors' => $errors]);
                }
            }
            else {
                echo $this->twig->render('new_chapter.html.twig');
            }
        }
    }

    public function modifyChapter(Parameter $post, $chapterId)
    {        
        if($this->checkAdmin()) {
            $chapter = $this->chapterDAO->getChapter($chapterId);
            if ($chapter) {
                $post->set('id', $chapter->getId());
            }
            else {
                $this->session->set('error_chapter', 'Désolé, ce chapitre n\'existe pas');
                header('Location: ../public/index.php?route=administration');
            }         
            if ($post->get('submit')){
                $errors = $this->validation->validate($post, 'Chapter');
                if (!$errors) {
                    if ($post->get('draft')) {
                        $this->chapterDAO->modifyDraft($post, $chapterId, $this->session->get('id'));
                        $this->session->set('modify_chapter', 'Le chapitre a bien été ajouté aux brouillons');
                    }
                    else {
                        $this->chapterDAO->modifyChapter($post, $chapterId, $this->session->get('id'));
                        $this->session->set('modify_chapter', 'Le chapitre a bien été modifié');
                    }

                    $chapters = $this->chapterDAO->getChapters();
                    $drafts = $this->chapterDAO->getDrafts();
                    $comments = $this->commentDAO->getFlagComments();
                    $users = $this->userDAO->getUsers();
                    echo $this->twig->render('administration.html.twig', ['chapters'=>$chapters, 'drafts' => $drafts, 'comments'=>$comments, 'users' => $users]);

                } else {
                    echo $this->twig->render('modify_chapter.html.twig', ['post' => $post, 'errors' => $errors]);
                }
            }
            else {
                $post->set('chapterNumber', $chapter->getChapterNumber());
                $post->set('title', $chapter->getTitle());
                $post->set('content', $chapter->getContent());
                $post->set('author', $chapter->getAuthor());

                echo $this->twig->render('modify_chapter.html.twig', ['post' => $post]);
            }
        }
    }

    public function publishChapter($chapterId)
    {
        if($this->checkAdmin()) {
            $this->chapterDAO->publishChapter($chapterId);
            $this->session->set('publish_chapter', 'Le chapitre a été publié');
            header('Location: ../public/index.php?route=administration');
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
            header('Location: ../public/index.php?route=administration');
        }
    }

    public function profile()
    {
        if($this->checkLoggedIn()) {
            echo $this->twig->render('profile.html.twig');
        }    
    }

    public function updatePassword(Parameter $post)
    {
        if($this->checkLoggedIn()) {
            if($post->get('submit')) {
                $errors = $this->validation->validate($post, 'User');
                if (!$errors) {
                    $this->userDAO->updatePassword($post, $this->session->get('pseudo'));
                    $this->session->set('password', 'Le mot de passe a été mis à jour');
                    header('Location: ../public/index.php?route=profile');
                }
                echo $this->twig->render('password.html.twig', ['post'=>$post, 'errors'=>$errors]);
            }
           echo $this->twig->render('password.html.twig');
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
            $drafts = $this->chapterDAO->getDrafts();
            $comments = $this->commentDAO->getFlagComments();
            $users = $this->userDAO->getUsers();

            echo $this->twig->render('administration.html.twig', ['chapters'=>$chapters, 'drafts' => $drafts, 'comments'=>$comments, 'users' => $users]);
        }     
    }

    public function modifyAuthor(Parameter $post)
    {
        $author = $this->authorDAO->getAuthor();

        if($this->checkAdmin()) {
            if ($post->get('submit')) { 
                
                    $this->authorDAO->modifyAuthor($post, $this->session);
                    $this->session->set('modify_author', 'La page auteur a bien été modifiée');
                    header('Location: ../public/index.php?route=administration');              
            }
            
            $post->set('content', $author->getContent());

            echo $this->twig->render('modify_author.html.twig', ['post' => $post]);
        }
    }

    public function modifyPresentation(Parameter $post)
    {
        $presentation = $this->presentationDAO->getPresentation();

        if($this->checkAdmin()) {
            if ($post->get('submit')) { 
                
                    $this->presentationDAO->modifyPresentation($post, $this->session);
                    $this->session->set('modify_presentation', 'Le texte de la page Accueil a bien été modifié');
                    header('Location: ../public/index.php?route=administration');              
            }
            
            $post->set('content', $presentation->getContent());

            echo $this->twig->render('modify_presentation.html.twig', ['post' => $post]);
        }
    }
}