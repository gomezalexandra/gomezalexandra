<?php $this->title = 'mofification'; ?>

<div class="title">
    <h1>Modifier le Chapitre</h1>
</div>

<div class="routeChapter">
        <a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($_GET["chapterId"])?>">Revenir au chapitre <?php echo htmlspecialchars($_GET["chapterId"]); ?> -> </a>
</div>

<!-- les champs sont automatiquement complétés par l'ancien chaptitre -->

<div>
    <?php include('form_chapter.php');?>
</div>