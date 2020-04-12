<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>   
</head>-->


<?php $this->title = 'Administration'; ?>

<div class="title">
    <h1>L'Administration</h1>
</div>


    <?= $this->session->show('new_chapter'); ?> <!--fait apparaitre les messages de backcontroller-->
    <?= $this->session->show('modify_chapter'); ?> 
    <?= $this->session->show('delete_chapter'); ?>
    <?= $this->session->show('delete_comment'); ?>
    <?= $this->session->show('unflag_comment'); ?>
    <?= $this->session->show('delete_user'); ?> </br>


    <h2>Chapitres</h2>
    <a href="../public/index.php?route=writteChapter">Ajouter un chapitre</a>

    

    <table>
        <tr>
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
                <td><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= htmlspecialchars_decode($chapter->getTitle());?></a></td>
                <td><?= substr(htmlspecialchars_decode($chapter->getContent()), 0, 350);?></td>
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

    <table>
        <tr>
            <td>Pseudo</td>
            <td>Message</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($comments as $comment)
        {
            ?>
            <tr>
                <td><?= htmlspecialchars($comment->getPseudo());?></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                <td>
                    <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                    <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>


    <h2>Utilisateurs</h2>

    <table>
        <tr>
            <td>Pseudo</td>
            <td>Date</td>
            <td>Rôle</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($users as $user)
        {
            ?>
            <tr>
                <td><?= htmlspecialchars($user->getPseudo());?></td>
                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                <td><?= htmlspecialchars($user->getRole());?></td>
                <td>  <?php
                    if($user->getRole() != 'admin') {
                    ?>
                    <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                    <?php }
                    else {
                        ?>
                    Suppression impossible
                    <?php
                    } ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
