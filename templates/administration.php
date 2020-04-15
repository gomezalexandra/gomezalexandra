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
    <?= $this->session->show('delete_user'); ?>

<div class="administrationChapter">
    <div class="administrationSubtitle">
        <h2>Les Chapitres</h2>
    </div>

    <div class="addChapter">
        <a href="../public/index.php?route=newChapter">Nouveau chapitre</a>
    </div>

    <table>
        <tr class="tableHead">
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
            <tr class="tableBody">
                <td><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= htmlspecialchars_decode($chapter->getTitle());?></a></td>
                <td><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= substr(htmlspecialchars_decode($chapter->getContent()), 0, 350);?></a></td>
                <td><?= htmlspecialchars($chapter->getAuthor());?></td>
                <td>Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></td>
                <td class="tableActions">
                    <a href="../public/index.php?route=modifyChapter&chapterId=<?= $chapter->getId(); ?>">Modifier</a></br>
                    <a href="../public/index.php?route=deleteChapter&chapterId=<?= $chapter->getId(); ?>">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<div class="administrationComments">
    <div class="administrationSubtitle">
        <h2>Les Commentaires signalés</h2>
    </div>
    <table>
        <tr class="tableHead">
            <td>Pseudo</td>
            <td>Message</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($comments as $comment)
        {
            ?>
            <tr class="tableBody">
                <td><?= htmlspecialchars($comment->getPseudo());?></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                <td class="tableActions">
                    <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a> </br>
                    <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<div class="administrationUser">
    <div class="administrationSubtitle">
        <h2>Les Utilisateurs</h2>
    </div>

    <table>
        <tr class="tableHead">
            <td>Pseudo</td>
            <td>Date</td>
            <td>Rôle</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($users as $user)
        {
            ?>
            <tr class="tableBody">
                <td><?= htmlspecialchars($user->getPseudo());?></td>
                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                <td><?= htmlspecialchars($user->getRole());?></td>
                <td class="tableActions">  <?php
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
</div>
