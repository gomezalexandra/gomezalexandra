<?php

//require '../config/Autoloader.php';
//require '../src/DAO/ChapterDAO.php';
//require '../src/DAO/CommentDAO.php';

//use \App\config\Autoloader;
    //use App\src\DAO\ChapterDAO;
    //use App\src\DAO\CommentDAO;

//Autoloader::register();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>
</head>

<body>
<div>
    <h1>Mon livre</h1>
    
    <?php
        //$chapter = new ChapterDAO();
        //$chapters = $chapter->getChapter(1);
        //$chapter = $chapters->fetch()
    ?>
    <div>
        <h2><?= htmlspecialchars($chapter->getTitle());?></h2>
        <p><?= htmlspecialchars($chapter->getContent());?></p>
        <p><?= htmlspecialchars($chapter->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></p>
    </div>
    
    <div class="actions">
        <a href="../public/index.php?route=modifyChapter&chapterId=<?= $chapter->getId(); ?>">Modifier le chapitre</a> 
    </div>
    </br>
    <?php
    //$chapters->closeCursor();
    ?>

    <a href="../public/index.php">Retour à l'accueil</a>

    <div id="comment">
        <h3>Commentaires</h3>
        <?php
        foreach ($comments as $comment)
        {
            ?>
            <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
            <p><?= htmlspecialchars($comment->getContent());?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>