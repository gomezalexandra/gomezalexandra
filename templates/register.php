<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>
</head>-->


<?php $this->title = "Inscription"; ?>

<div class="title">
    <h1>Inscription</h1>
</div>

<div class="register">
    <div class="formContainer">
        <form method="post" action="../public/index.php?route=register">
            <label for="pseudo">Pseudo :</label><br>
            <input type="text" id="pseudo" name="pseudo"><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Inscription" id="submit" name="submit">
        </form>
    </div>

    <div class="alreadyMember">
        <a href="../public/index.php?route=login">J'ai déjà un Compte -> </a>
    </div>
</div>
