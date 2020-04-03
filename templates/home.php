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
        <a href="../public/index.php?route=writteChapter">Ajouter un chapitre</a></br>
        <?= $this->session->show('new_chapter'); ?> <!--fait apparaitre message de backcontroller-->
        <?= $this->session->show('modify_chapter'); ?> <!--fait apparaitre message de backcontroller-->

        <?php
        
            //while($chapters = $allChapters->fetch())
            foreach ($chapters as $chapter)
        {
            ?>
            <div>
                <h2><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= htmlspecialchars($chapter->GetTitle());?></a></h2>
                <p><?= htmlspecialchars($chapter->getContent());?></p>
                <p><?= htmlspecialchars($chapter->getAuthor());?></p>
                <p>Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></p>
            </div>
            <br>
            <?php
        }
        //$allChapters->closeCursor();
        ?>
    </div>
</body>
</html>