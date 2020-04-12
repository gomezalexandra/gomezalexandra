<?php $this->title = 'mofification'; ?>
<head>
    <script src="https://cdn.tiny.cloud/1/cw4q64aokxm6bpoqnqo3ll1stp1bwm7285a3jsoyczyjp3dm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<?php
$route = isset($chapter) && $chapter->getId() ? 'modifyChapter&chapterId='.$chapter->getId() : 'newChapter';
$submit = $route === 'newChapter' ? 'Envoyer' : 'Mettre à jour';
$title = isset($chapter) && $chapter->getTitle() ? htmlspecialchars($chapter->getTitle()) : '';
$content = isset($chapter) && $chapter->getContent() ? htmlspecialchars($chapter->getContent()) : '';
//$author = isset($chapter) && $chapter->getAuthor() ? htmlspecialchars($chapter->getAuthor()) : '';
?>

    <script>
        tinymce.init({
        selector: 'textarea',
        toolbar_mode: 'floating',
        });

        tinymce.init({
        selector: '#title',
        toolbar_mode: 'floating',
        });
    </script>
<div class="formContainer">
    <form class="formChapter" method="post" action="../public/index.php?route=<?= $route; ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?= $title; ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= $content; ?></textarea><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
</div>