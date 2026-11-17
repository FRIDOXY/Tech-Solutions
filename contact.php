<?php include "assets/php/inc/infos.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech - Solutions - Contact</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "assets/php/inc/menu.php"; ?>
    <h2><center>Un problème ? / Une question ?</center></h2>
    <p><center>Vous pouvez nous contacter via le formulaire ci-dessous :</center></p>
    <br></br>
    <br></br>
    <br></br>
    <center>
    <form action="assets/php/contact.php" method="post">
        <label for="name">Nom :</label>
        <input  type="text" id="name" name="name" required><br><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="5" required></textarea><br><br>
        <input type="submit" value="Envoyer">
    </form></center>
<h1><center>Nos coordonnées :</center></h1>
<p><center><?php echo "<strong>Adresse : </strong>" . $adresse; ?></center></p>
<p><center><?php echo "<strong>Téléphone : </strong>" . $telephone; ?></center></p>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<?php include "assets/php/inc/pied.php"; ?>
</body>
</html>