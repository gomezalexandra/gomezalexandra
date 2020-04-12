<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>
</head>-->

<?php $this->title = "Connexion"; ?>

<div class="title">
    <h1>Connexion</h1>
</div>

    <?= $this->session->show('error_login'); ?>
    <?= $this->session->show('need_login'); ?>

<div class="login">
    <div class="formContainer">
        <form method="post" action="../public/index.php?route=login">
            <label for="pseudo">Pseudo</label><br>
            <input type="text" id="pseudo" name="pseudo"><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Connexion" id="submit" name="submit">
        </form>
    </div>

    <div class="notMember">
        <a href="../public/index.php?route=register">Je n'ai pas de Compte -> </a>
    </div>
</div>