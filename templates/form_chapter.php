<?php $this->title = 'mofification'; ?>


<?php
//$route = isset($chapter) && $chapter->getId() ? 'modifyChapter&chapterId='.$chapter->getId() : 'modifyChapter';
$route = isset($post) && $post->get('id') ? 'modifyChapter&chapterId='.$post->get('id') : 'newChapter';
$submit = $route === 'newChapter' ? 'Envoyer' : 'Mettre à jour';
$title = isset($post) && $post->get('title') ? htmlspecialchars($post->get('title')) : '';
$content = isset($post) && $post->get('content') ? htmlspecialchars($post->get('content')) : '';
//$author = isset($chapter) && $chapter->getAuthor() ? htmlspecialchars($chapter->getAuthor()) : '';
?>
<script>
    tinymce.init({
    selector: 'textarea',
    toolbar_mode: 'floating',
    });
</script>

<div class="formContainer">
    <form class="formChapter" method="post" action="../public/index.php?route=<?= $route; ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?= $title; ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= $content; ?></textarea><br>
        <input type="submit" value="<?= $submit; ?>"  id="submit" name="submit">
    </form>
</div>