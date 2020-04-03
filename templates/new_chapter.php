<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon Livre</title>
</head>

<body>
    <h1>Mon livre</h1>

    <div>
        <!--<form method="post" action="../public/index.php?route=newChapter">
            <p><label> Titre du Chapitre : <input type="text" name="title"/></label></p>
            <p><label> Texte : <input type="text" name="content"/></label></p>
            <p><label> Auteur : <input type="text" name="author"/></label></p>
            <p><input type= "submit" value="Créer" name="send"/></p>
        </form>-->

        <?php include('form_chapter.php');?>

        <a href="../public/index.php">Retour à l'accueil</a>
    </div>
</body>