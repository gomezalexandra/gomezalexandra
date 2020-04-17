<?php $this->title = "Inscription"; ?>

<div class="title">
    <h1>Inscription</h1>
</div>

<div class="register">
    <div class="formContainer">
        <form method="post" action="../public/index.php?route=register">
            <label for="pseudo">Pseudo :</label><br>
            <input type="text" id="pseudo" name="pseudo"><br>
            <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password"><br>
            <?= isset($errors['password']) ? $errors['password'] : ''; ?>
            <input type="submit" value="Inscription" id="submit" name="submit">
        </form>
    </div>

    <div class="alreadyMember">
        <a href="../public/index.php?route=login">J'ai déjà un Compte -> </a>
    </div>
</div>
