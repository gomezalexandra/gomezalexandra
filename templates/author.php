<?php $this->title = "author"; ?>

<div class="title">
    <h1>L'Auteur</h1>
</div>

<div class="subMenu">
    <?php
    if ($this->session->get('pseudo')) {
        ?>
        <div class="subMenuTab"> <a href="../public/index.php?route=logout">Déconnexion</a></div>
        <div class="subMenuTab"> <a href="../public/index.php?route=profile">Profil</a> </div>

        <?php if($this->session->get('role') === 'admin') { ?>
        <div class="subMenuTab"> <a href="../public/index.php?route=administration">Administration</a></div>
        <?php } 

    } else {
        ?>
        <div class="subMenuTab"> <a href="../public/index.php?route=register">S'inscrire</a> </div>
        <div class="subMenuTab"> <a href="../public/index.php?route=login">Se connecter</a> </div>
        <?php
    }
    ?>
</div>

<div class="author">
    <p> <?= htmlspecialchars_decode($author->getContent()); ?> </p>
</div>

