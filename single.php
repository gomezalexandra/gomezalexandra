<?php
require 'Database.php';
require 'Chapter.php';
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
        <h2><?= htmlspecialchars($chapter['title']);?></h2>
        <p><?= htmlspecialchars($chapter['content']);?></p>
        <p><?= htmlspecialchars($chapter['author']);?></p>
        <p>Créé le : <?= htmlspecialchars($chapter['createdAt']);?></p>
    </div>
    <br>
    <?php
    $chapters->closeCursor();
    ?>
    <a href="home.php">Retour à l'accueil</a>
</div>
</body>
</html>