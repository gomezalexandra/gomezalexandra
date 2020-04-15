<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/css/blog.css"/>
    <script src="https://cdn.tiny.cloud/1/cw4q64aokxm6bpoqnqo3ll1stp1bwm7285a3jsoyczyjp3dm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
            <a href="../public/index.php?route=author">L'Auteur</a>
        </div>
        <div id="hidenMenu" class="menuTab">
            <div><a>Mon Compte</a> </div>
            
            <div class="hidenMenuTab">
                <?php if ($this->session->get('pseudo')) { ?>
                    <a href="../public/index.php?route=profile">Profil</a>

                    <?php if ($this->session->get('role') === 'admin') { ?>
                        <a href="../public/index.php?route=administration">Administration</a>
                    <?php } ?>

                    <a href="../public/index.php?route=logout">Déconnexion</a>
                <?php } else { ?>
                    <a href="../public/index.php?route=register">S'inscrire</a>
                    <a href="../public/index.php?route=login">Se Connecter</a>
                <?php } ?>

            </div>
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