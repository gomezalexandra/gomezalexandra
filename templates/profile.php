<?php $this->title = 'profile'; ?>

<div class="title">
    <h1>Mon Profil</h1>
</div>

<div>
    <?= $this->session->show('password'); ?>
    <?= $this->session->show('not_admin'); ?>
</div>

<div class= "profilePseudo">
    <h2> Mon pseudo : <?= $this->session->get('pseudo'); ?> </h2>
</div>

<div class="subMenu">
    <div class="subMenuTab"> <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a> </div>
    <div class="subMenuTab"> <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a> </div>
</div>


