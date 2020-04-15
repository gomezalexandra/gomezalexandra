<?php $this->title = 'ajout chapitre'; ?>

<div class="title">
    <h1>L'Auteur</h1>
</div>

<div class="routeAdministration">
    <a href="../public/index.php?route=administration">Retour à l'Administration -> </a>
</div>

<?php
    $content = isset($post) && $post->get('content') ? htmlspecialchars($post->get('content')) : '';
    var_dump($content);
?>

<script>
    tinymce.init({
    selector: 'textarea',
    toolbar_mode: 'floating',
    });
</script>

<div class="formContainer">
    <form class="formAuthor" method="post" action="../public/index.php?route=modifyAuthor">
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= $content; ?></textarea><br>
        <input type="submit" value="modifier"  id="submit" name="submit">
    </form>
</div>