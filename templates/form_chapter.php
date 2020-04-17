<?php $this->title = 'mofification'; ?>

<?php
//$route = isset($chapter) && $chapter->getId() ? 'modifyChapter&chapterId='.$chapter->getId() : 'modifyChapter';
$route = isset($post) && $post->get('id') ? 'modifyChapter&chapterId='.$post->get('id') : 'newChapter';
$submit = $route === 'newChapter' ? 'Publier' : 'Modifier et Publier';
$chapterNumber = isset($post) && $post->get('chapterNumber') ? htmlspecialchars($post->get('chapterNumber')) : '';
$title = isset($post) && $post->get('title') ? htmlspecialchars($post->get('title')) : '';
$content = isset($post) && $post->get('content') ? htmlspecialchars($post->get('content')) : '';
var_dump($route);
?>

<script>
    tinymce.init({
    selector: 'textarea',
    toolbar_mode: 'floating',
    });
</script>

<div class="formContainer">
    <form class="formChapter" method="post" action="../public/index.php?route=<?= $route; ?>">
        <label for="title">Numéro du Chapitre</label><br><input type="text" id="chapterNumber" name="chapterNumber" value="<?= $chapterNumber; ?>"><br>
        <label for="title">Titre</label><br><input type="text" id="title" name="title" value="<?= $title; ?>"><br>
        <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        <label for="content">Contenu</label><br><textarea id="content" name="content"><?= $content; ?></textarea><br>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        <input type="submit" value="<?= $submit; ?>"  id="submit" name="submit">
        <input type="submit" value="Brouillon"  id="draft" name="draft">
    </form>
</div>