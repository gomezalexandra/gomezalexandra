<?php $this->title = 'commentaire'; ?>

<form method="post" action="../public/index.php?route=addComment&chapterId=<?= htmlspecialchars($chapter->getId()); ?>">
    <!--<label for="pseudo">Pseudo</label><br>
    <input type="text"  value= <?//= $this->session->get('pseudo');?> id="pseudo" name="pseudo"><br>-->
    <label for="content">Commentaire</label><br>
    <textarea id="content" name="content"></textarea><br>
    <input type="submit" value="Ajouter" id="submit" name="submit">
</form>