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

<body>
<div>
    <h1>Mon livre</h1>
    <?= $this->session->show('add_comment'); ?> </br>
    <a href="../public/index.php">Retour à l'accueil</a>
    
    <?php
    ?>
    <div>
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
        </br>
    <?php
    }
    ?> 

    <div id="comment">
    
        <h3>Ajouter un commentaire</h3>
        <?php include('form_comment.php'); ?>

    
        <h3>Commentaires</h3>
        <?php
        foreach ($comments as $comment)
        {
            ?>
            <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
            <p><?= htmlspecialchars($comment->getContent());?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
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

            <?php if($this->session->get('role') === 'admin') { ?>
                <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
                <br>
                <?php
            }
        }
        ?>
         
    </div>
</div>
</body>
</html>