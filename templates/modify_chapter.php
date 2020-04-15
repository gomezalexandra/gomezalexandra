<?php $this->title = 'mofification'; ?>

<div class="title">
    <h1>Modifier le Chapitre</h1>
</div>

<div class="routeChapter">
    <a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($_GET["chapterId"])?>">Revenir au chapitre -> </a>
</div>

<div>
    <?php include('form_chapter.php');?>
</div>