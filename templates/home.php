<?php 

//require '../config/Autoloader.php';
//require '../src/DAO/ChapterDAO.php';


//use \App\config\Autoloader;


//Autoloader::register();
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
        
        while($chapters = $allChapters->fetch())
        {
            ?>
            <div>
                <h2><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapters->id);?>"><?= htmlspecialchars($chapters->title);?></a></h2>
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