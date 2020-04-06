<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon livre</title>
</head>

<body>
    <h1>Mon livre</h1>
    <p>S'inscrire</p>
    <div>
        <form method="post" action="../public/index.php?route=register">
            <label for="pseudo">Pseudo</label><br>
            <input type="text" id="pseudo" name="pseudo"><br>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Inscription" id="submit" name="submit">
        </form>
        <a href="../public/index.php">Retour à l'accueil</a>
    </div>
</body>
</html>