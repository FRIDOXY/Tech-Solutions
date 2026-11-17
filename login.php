<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech - Solutions - Connexion / Inscription</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "assets/php/inc/menu.php"; ?>
    <main class="login-page">
        <h1>Connexion</h1>
        <form action="assets/php/verifier.php" method="post">
            <label for="identifiant">Identifiant :</label>
            <input type="text" id="identifiant" name="identifiant" required>
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>
            <input type="submit" value="Se connecter">
            <p>Vous n'avez pas de compte ? <a href="singin.php">Inscrivez-vous ici</a></p>
        </form>
    </main>
    <?php include "assets/php/inc/pied.php"; ?>
</body>
</html>