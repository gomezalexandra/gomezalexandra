<?php 
require 'Database.php'; 
require 'Chapter.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon Livre</title>
</head>

<body>
    <div>
        <h1>Mon Livre</h1>
        <p>En construction</p>

        <?php
        $chapters = new Chapter();
        $allChapters = $chapters->getChapters();
        while($chapters = $allChapters->fetch())
        {
            ?>
            <div>
                <h2><a href="single.php?chapterId=<?= htmlspecialchars($chapters->id);?>"><?= htmlspecialchars($chapters->title);?></a></h2>
                <p><?= htmlspecialchars($chapters->content);?></p>
                <p><?= htmlspecialchars($chapters->author);?></p>
                <p>Créé le : <?= htmlspecialchars($chapters->createdAt);?></p>
            </div>
            <br>
            <?php
        }
        $allChapters->closeCursor();
        ?>
    </div>
</body>
</html>