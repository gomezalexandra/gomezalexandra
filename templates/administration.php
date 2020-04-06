<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>
</head>

<body>
    <h1>Mon livre</h1>
    <p>Espace d'administration</p>

    <?= $this->session->show('new_chapter'); ?> <!--fait apparaitre les messages de backcontroller-->
    <?= $this->session->show('modify_chapter'); ?> 
    <?= $this->session->show('delete_chapter'); ?> 

    <a href="../public/index.php?route=logout">Déconnexion</a> </br>
    <a href="../public/index.php">Retour à l'accueil</a>

    <h2>Chapitres</h2>
    <a href="../public/index.php?route=writteChapter">Ajouter un chapitre</a>

    <table>
    <tr>
        <td>Id</td>
        <td>Titre</td>
        <td>Contenu</td>
        <td>Auteur</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($chapters as $chapter)
    {
        ?>
        <tr>
            <td><?= htmlspecialchars($chapter->getId());?></td>
            <td><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= htmlspecialchars($chapter->getTitle());?></a></td>
            <td><?= substr(htmlspecialchars($chapter->getContent()), 0, 150);?></td>
            <td><?= htmlspecialchars($chapter->getAuthor());?></td>
            <td>Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></td>
            <td>
                <a href="../public/index.php?route=modifyChapter&chapterId=<?= $chapter->getId(); ?>">Modifier</a>
                <a href="../public/index.php?route=deleteChapter&chapterId=<?= $chapter->getId(); ?>">Supprimer</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

    <h2>Commentaires signalés</h2>

    <h2>Utilisateurs</h2>

</body>
</html>