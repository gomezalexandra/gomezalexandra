<?php $this->title = "Accueil"; ?>


    <div>
        <div class="title">
            <h1>Les Chapitres</h1>
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

        <div>
            <?php
            foreach ($chapters as $chapter)
            {
                ?>
                <div class="chapterContainer">
                    <div class="chapterDescription">
                        <div class= "content">
                            <h2><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= htmlspecialchars_decode($chapter->GetTitle());?></a></h2>
                            <p><?= htmlspecialchars_decode($chapter->getContent());?></p>
                            <p><?= htmlspecialchars($chapter->getAuthor());?></p>
                            <p>Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></p>
                        </div>
                    </div>

                    <?php if((htmlspecialchars($chapter->getId()) % 2) == 0) {
                            $color = "chapterLinkBlue";
                        } else {
                            $color = "chapterLinkBrown";
                        }
                    ?> 

                    <div class= "<?= $color ?>">
                        <p>Chapitre <?= htmlspecialchars($chapter->getId());?> </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
