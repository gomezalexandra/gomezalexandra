<?php
require 'Database.php';
require 'Chapter.php';
require 'Comment.php';
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
    $chapter = new Chapter();
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

    <a href="home.php">Retour à l'accueil</a>

    <div id="comment">
        <h3>Commentaires</h3>
        <?php
        $comment = new Comment();
        $comments = $comment->getChapterComment($_GET['chapterId']);
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