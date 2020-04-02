<?php

//require '../config/Autoloader.php';
//require '../src/DAO/ChapterDAO.php';
//require '../src/DAO/CommentDAO.php';

//use \App\config\Autoloader;
use App\src\DAO\ChapterDAO;
use App\src\DAO\CommentDAO;

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
    <p>En construction</p>
    <?php
    $chapter = new ChapterDAO();
    $chapters = $chapter->getChapter(1);
    $chapter = $chapters->fetch()
    ?>
    <div>
        <h2><?= htmlspecialchars($chapter->title);?></h2>
        <p><?= htmlspecialchars($chapter->content);?></p>
        <p><?= htmlspecialchars($chapter->author);?></p>
        <p>Créé le : <?= htmlspecialchars($chapter->createdAt);?></p>
    </div>
    <br>
    <?php
    $chapters->closeCursor();
    ?>

    <a href="../public/index.php">Retour à l'accueil</a>

    <div id="comment">
        <h3>Commentaires</h3>
        <?php
        while($comment = $comments->fetch())
        {
            ?>
            <h4><?= htmlspecialchars($comment->pseudo);?></h4>
            <p><?= htmlspecialchars($comment->content);?></p>
            <p>Posté le <?= htmlspecialchars($comment->createdAt);?></p>
            <?php
        }
        $comments->closeCursor();
        ?>
    </div>
</div>
</body>
</html>