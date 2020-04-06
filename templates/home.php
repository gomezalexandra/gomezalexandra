<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon Livre</title>
</head>

<body>
    <div>
        <h1>Mon Livre</h1>
        
        <?= $this->session->show('new_chapter'); ?> <!--fait apparaitre les messages de backcontroller-->
        <?= $this->session->show('modify_chapter'); ?> 
        <?= $this->session->show('delete_chapter'); ?> 
        <?= $this->session->show('flag_comment'); ?>
        <?= $this->session->show('delete_comment'); ?>
        <?= $this->session->show('register'); ?>
        <?= $this->session->show('login'); ?> <!-- a personnaliser avec le pseudo voir frontcontroller-->
        <?= $this->session->show('logout'); ?> </br>

        <?php
        if ($this->session->get('pseudo')) {
            ?>
            <a href="../public/index.php?route=logout">Déconnexion</a> </br>
            <a href="../public/index.php?route=profile">Profil</a> </br>
            <a href="../public/index.php?route=writteChapter">Ajouter un chapitre</a></br>
            <?php
        } else {
            ?>
            <a href="../public/index.php?route=register">S'inscrire</a>
            <a href="../public/index.php?route=login">Se connecter</a>
            <?php
        }
        ?>

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
        ?>
    </div>
</body>
</html>