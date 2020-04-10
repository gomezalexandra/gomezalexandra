<?php $this->title = "Accueil"; ?>


    <div>
        <h1>Les Chapitres</h1>

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

        <?php
        
            //while($chapters = $allChapters->fetch())
            foreach ($chapters as $chapter)
        {
            ?>
            <div>
                <h2><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= htmlspecialchars_decode($chapter->GetTitle());?></a></h2>
                <p><?= htmlspecialchars_decode($chapter->getContent());?></p>
                <p><?= htmlspecialchars($chapter->getAuthor());?></p>
                <p>Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></p>
            </div>
            <br>
            <?php
        }
        ?>
    </div>
