<?php $this->title = "Accueil"; ?>


    <div>
        <div class="title">
            <h1>Jean Forteroche</h1>
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
            <?= $this->session->show('flag_comment'); ?>
            <?= $this->session->show('register'); ?>
            <?= $this->session->show('login'); ?> <!-- a personnaliser avec le pseudo voir frontcontroller-->
            <?= $this->session->show('logout'); ?> 
            <?= $this->session->show('delete_account'); ?></br>
        </div>

        <div class="presentation">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at vulputate elit. Nunc mollis consequat tristique. Praesent at ornare massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ac lorem et ante elementum ullamcorper. Integer quis sapien rhoncus, mattis nulla in, scelerisque dui. Nullam venenatis vitae nisi sed laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at vulputate elit. Nunc mollis consequat tristique. Praesent at ornare massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam ac lorem et ante elementum ullamcorper. Integer quis sapien rhoncus, mattis nulla in, scelerisque dui.</p>
        </div>

        <section class="lastChapterContainer">
            <div class="lastChapter">
                <?php
                
                    //while($chapters = $allChapters->fetch())
                    foreach ($chapters as $chapter)
                {
                    ?>
                    <div class="content">
                        <h2><a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>"><?= htmlspecialchars_decode($chapter->GetTitle());?></a></h2>
                        <p><?= htmlspecialchars_decode($chapter->getContent());?></p>
                        <p><?= htmlspecialchars($chapter->getAuthor());?></p>
                        <p >Créé le : <?= htmlspecialchars($chapter->getCreatedAt());?></p>
                    </div>
                    
            </div>
            <div class="lastChapterLink">
                   <h3> <a href="../public/index.php?route=chapter&chapterId=<?= htmlspecialchars($chapter->getId());?>">Lire le dernier Chapitre</a> </h3>
                    <?php
                }
                ?>
            </div>
        </section>
        
        <section class="sectionThree">
            <div class="allChaptersContainer">
                <div class="whiteBlock">
                    <div class="allChaptersLink"> 
                        <h3><a href="../public/index.php?route=allChapters">Voir les Chapitres  -></a></h3>
                    </div>
                </div>
                <div class="blueBlock"> 
                    <div class="image"> 
                        <img class="image" src="../public/img/book.jpg" alt="livre ouvert"/>                  
                    </div>                
                </div>
            </div>
            
            <div class="authorContainer">
                <div class="whiteBlock">
                    <div class="authorLink">  
                        <h3><a href="../public/index.php?route=author">Découvrir l'Auteur  -></a></h3>
                    </div>
                </div>
                <div class="blueBlock">
                    <div class="image"> 
                        <img class="image" src="../public/img/person.jpg" alt="personne tenant un stylo"/>                 
                    </div>        
                </div>
                
            </div> 
        <section>
    </div>
