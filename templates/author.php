<?php $this->title = "author"; ?>


    <div>
        <h1>L'Auteur</h1>

        <?php
        if ($this->session->get('pseudo')) {
            ?>
            <a href="../public/index.php?route=logout">Déconnexion</a> </br>
            <a href="../public/index.php?route=profile">Profil</a> </br>

            <?php if($this->session->get('role') === 'admin') { ?>
                <a href="../public/index.php?route=administration">Administration</a> </br>
            <?php } 

        } else {
            ?>
            <a href="../public/index.php?route=register">S'inscrire</a>
            <a href="../public/index.php?route=login">Se connecter</a>
            <?php
        }
        ?>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at vulputate elit. Nunc mollis consequat tristique. Praesent at ornare massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ac lorem et ante elementum ullamcorper. Integer quis sapien rhoncus, mattis nulla in, scelerisque dui. Nullam venenatis vitae nisi sed laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
    </div>
