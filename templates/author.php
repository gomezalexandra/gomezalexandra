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
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor lectus a turpis placerat suscipit. Curabitur placerat volutpat justo. Mauris egestas, eros eget iaculis hendrerit, magna nunc ultricies magna, ac viverra dui enim et dui. Etiam placerat felis et orci molestie scelerisque. Aenean id molestie lectus. Suspendisse tincidunt eros nec orci sagittis finibus. Phasellus vel mauris quis tellus dignissim vehicula vitae non justo. Sed interdum dui ac augue sodales tincidunt.
    Curabitur convallis malesuada accumsan. Pellentesque neque lectus, blandit ac lorem ut, condimentum tristique sem. Integer rutrum dolor ac nisl tempus, at porta est vestibulum. Phasellus sed est cursus, eleifend enim sed, mattis felis. Fusce eget mauris id felis rhoncus congue. Nunc nec vehicula erat. Cras condimentum elementum risus, eu consequat massa rutrum ac. Maecenas eget diam id lorem finibus feugiat. Integer nulla ligula, aliquam nec cursus a, molestie in sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin pretium lacus a lobortis dictum. Phasellus viverra volutpat faucibus. Phasellus dictum et purus at accumsan. Suspendisse nec ex vel dolor scelerisque laoreet. Sed tincidunt pretium nisl vel aliquet.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor lectus a turpis placerat suscipit. Curabitur placerat volutpat justo. Mauris egestas, eros eget iaculis hendrerit, magna nunc ultricies magna, ac viverra dui enim et dui. Etiam placerat felis et orci molestie scelerisque. Aenean id molestie lectus. Suspendisse tincidunt eros nec orci sagittis finibus. Phasellus vel mauris quis tellus dignissim vehicula vitae non justo. Sed interdum dui ac augue sodales tincidunt.
    Curabitur convallis malesuada accumsan. Pellentesque neque lectus, blandit ac lorem ut, condimentum tristique sem. Integer rutrum dolor ac nisl tempus, at porta est vestibulum. Phasellus sed est cursus, eleifend enim sed, mattis felis. Fusce eget mauris id felis rhoncus congue. Nunc nec vehicula erat. Cras condimentum elementum risus, eu consequat massa rutrum ac. Maecenas eget diam id lorem finibus feugiat. Integer nulla ligula, aliquam nec cursus a, molestie in sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin pretium lacus a lobortis dictum. Phasellus viverra volutpat faucibus. Phasellus dictum et purus at accumsan. Suspendisse nec ex vel dolor scelerisque laoreet. Sed tincidunt pretium nisl vel aliquet.</p>
</div>
