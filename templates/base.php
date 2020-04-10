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
        <div class="menuTab">Accueil</div>
        <div class="menuTab">Chapitres</div>
        <div class= "logo">JF</div>
        <div class="menuTab">L'Auteur</div>
        <div class="menuTab">Mon Compte</div>
    </header>

    <div id="content">
        <?= $content ?>
    </div>

    <footer>
        <div>
            <p>Mention légales/Droit d'auteur</p>
        </div>
    </footer>
</body>
</html>