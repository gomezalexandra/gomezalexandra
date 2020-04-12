<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/css/blog.css"/>
	<!--<link rel="stylesheet" href="fontawesome-free/css/all.css"/>-->
</head>

<body>
    <header class="menu">
        <div class="menuTab">
            <a href="../public/index.php">L'Accueil</a>
        </div>
        <div class="menuTab">
            <a href="../public/index.php?route=allChapters">Les Chapitres</a>
        </div>
        <div class= "logo">JF</div>
        <div class="menuTab">
            L'Auteur
        </div>
        <div class="menuTab">
            Mon Compte
        </div>
    </header>

    <div id="content">
        <?= $content ?>
    </div>

    <footer>
            <p>Site réalisé dans le cadre d'une formation OpenClassrooms</br>par Alexandra Gomez.</p>
    </footer>
</body>
</html>