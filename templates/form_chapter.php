<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mes chapitres</title>
</head>

<h1>Modifier les chapitres</h1>

<?php
$route = isset($chapter) && $chapter->getId() ? 'modifyChapter&chapterId='.$chapter->getId() : 'newChapter';
$submit = $route === 'newChapter' ? 'Envoyer' : 'Mettre à jour';
$title = isset($chapter) && $chapter->getTitle() ? htmlspecialchars($chapter->getTitle()) : '';
$content = isset($chapter) && $chapter->getContent() ? htmlspecialchars($chapter->getContent()) : '';
//$author = isset($chapter) && $chapter->getAuthor() ? htmlspecialchars($chapter->getAuthor()) : '';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>">
    <label for="title">Titre</label><br>
    <input type="text" id="title" name="title" value="<?= $title; ?>"><br>
    <label for="content">Contenu</label><br>
    <textarea id="content" name="content"><?= $content; ?></textarea><br>
    <input type="submit" value="Envoyer" id="submit" name="submit">
</form>