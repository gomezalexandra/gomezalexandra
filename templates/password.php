<?php $this->title = 'password'; ?>

<div class="title">
    <h1>Mot de Passe</h1>
</div>

<div class="passwordChange">
    <p>En poursuivant cette action, le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié.</p>
</div>

<div class="password">
    <div class="formContainer">
        <form method="post" action="../public/index.php?route=updatePassword">
            <label for="password">Nouveau mot de passe :</label><br>
            <input type="password" id="password" name="password"><br>
            <?= isset($errors['password']) ? $errors['password'] : ''; ?>
            <input type="submit" value="Mettre à jour" id="submit" name="submit">
        </form>
    </div>

    <div class="routeProfile">
        <a href="../public/index.php?route=profile">Retourner au Profil</a>
    </div>
</div>

