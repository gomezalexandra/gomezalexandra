<?php

//require '../config/Autoloader.php';
//require '../src/DAO/ChapterDAO.php';
//require '../src/DAO/CommentDAO.php';

//use \App\config\Autoloader;
    //use App\src\DAO\ChapterDAO;
    //use App\src\DAO\CommentDAO;

//Autoloader::register();

?>

<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>
</head>-->


<?php $this->title = "Chapter"; ?>


<div>
    <div class="title">
        <h1>Chapitre <?= htmlspecialchars($chapter->getId());?></h1>
    </div>

    <div>
        <?= $this->session->show('add_comment'); ?>
    </div>

    <div class="subMenu">
            <?php
            if ($this->session->get('pseudo')) {
                ?>
                <div class="subMenuTab"> <a href="../public/index.php?route=logout">Déconnexion</a></div>
                <div class="subMenuTab"> <a href="../public/index.php?route=profile">Profil</a> </div>

                <?php if($this->session->get('role') === 'admin') { ?>
                <div class="subMenuTab"> <a href="../public/index.php?route=administration">Administration</a></div>
                <?php } 

            } else {
                ?>
                <div class="subMenuTab"> <a href="../public/index.php?route=register">S'inscrire</a> </div>
                <div class="subMenuTab"> <a href="../public/index.php?route=login">Se connecter</a> </div>
                <?php
            }
            ?>
    </div>
    
    <div class="singleChapter">
        <h2><?= htmlspecialchars_decode($chapter->getTitle());?></h2>
        <p><?= htmlspecialchars_decode($chapter->getContent());?></p>
        <p><?= htmlspecialchars($chapter->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></p>
    </div>

    <?php if($this->session->get('role') === 'admin') { ?>
    
        <div class="actions">
            <a href="../public/index.php?route=modifyChapter&chapterId=<?= $chapter->getId(); ?>">Modifier le chapitre</a> </br>
            <a href="../public/index.php?route=deleteChapter&chapterId=<?= $chapter->getId(); ?>">Supprimer le chapitre</a>
        </div>
    <?php
    }
    ?> 

    <div id="commentContainer">
    
        <div class="addCommentContainer">
            <h2>Ajouter un commentaire</h2>
            <div class="addComment">
                <?php include('form_comment.php'); ?>
            </div>
        </div>

        <div class="allComments">

            <h2>Commentaires</h2>

            <?php
            foreach ($comments as $comment)
            {
                ?>
                <div class="singleComment">
                    <div class="comment">
                        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
                        <p><?= htmlspecialchars($comment->getContent());?></p>
                        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
                    </div>

                    <div class="flagCommentContainer">
                        <div class="flagComment">
                            <?php
                            if($comment->isFlag()) {
                                ?>
                                <p>Ce commentaire a déjà été signalé</p>
                        
                            <?php
                            } else {
                                ?>
                                <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="flagComment">
                            <?php if($this->session->get('role') === 'admin') { ?>
                                <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
                                <br>
                                <?php
                            } ?>
                        </div>
                        
                    </div>
                </div>
                    <?php
            }
            ?>
        </div>
         
    </div>
</div>