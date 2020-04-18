<?php $this->title = 'profile'; ?>

<div class="title">
    <h1>Mon Profil</h1>
</div>

<div class= "profilePseudo">
    <h2> Mon pseudo : <?= $this->session->get('pseudo'); ?> </h2>
</div>

<div class="subMenu">
    <div class="subMenuTab"> <a href="../public/index.php?route=updatePassword">Modifier mon mot de passe</a> </div>
    
    <?php 
    if ($this->session->get('role') === 'admin'){
        ?>
        <div class="subMenuTab" id="textWhite">Suppression du compte impossible</div>
        <?php 
    }
    else {
        ?>
        <div class="subMenuTab"> <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a> </div>
        <?php
    } ?>  
</div>


