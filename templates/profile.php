<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>
</head>

<body>
    <h1>Mon livre</h1>
    <p>Mon espace personnel</p>

    <?= $this->session->show('password'); ?>
    <?= $this->session->show('not_admin'); ?>

    <div>
        <h2><?= $this->session->get('pseudo'); ?></h2>
        <!--<p><?php// $this->session->get('id'); ?></p>-->
        <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
        <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
    </div>
    <br>
    <a href="../public/index.php">Retour à l'accueil</a>

</body>
</html>