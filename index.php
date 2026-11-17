<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech - Solutions</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "assets/php/inc/menu.php"; ?>
    <center>
        <h1>Bienvenue sur TechSolutions</h1>
        <p>Vous pouvez découvrir le plan du site internet ci dessous :</p>
    </center>
    <br></br>
    <br></br>
    <br></br>
    <table width="100%">
        <tr>
            <td class="table-gauche"><center><h2><a href="services.php">Découvre nos services</a></h2>
            <img src="assets/img/log-services.png" class="logo-index"></center></td>
            <td class="table-droite"><center><h2><a href="histoire.php">Découvrez notre histoire</a></h2>
            <img src="assets/img/story.png" class="logo-index"></center></td>
        </tr>
        <br></br>
        <br></br>
        <tr>
            <td class="table-gauche"><center><h2><a href="contact.php">Contactez nous</a></h2>
            <img src="assets/img/contact.png" class="logo-index"></center></td>
            <td class="table-droite"><center><h2><a href="login.html">Connexion / Inscription</a></h2>
            <img src="assets/img/login.png" class="logo-index"></center></td>
        </tr>
    </table>
<br></br>
<br></br>
<h1><center>Découvrez les nouveautés ainsi que nos offres !</center></h1>
<br></br>
<br></br>
<section class="home-news" aria-labelledby="home-news-title">
        <h1 id="home-news-title">Découvrez nos nouveautés et nos offres</h1>
        <p class="home-news-intro">Besoin d’un coup de main avec votre matériel informatique ? Découvrez nos services et parlons de votre projet.</p>
        <p class="carousel-hint">Faites défiler les cartes pour les découvrir.</p>
        <div class="news-carousel" role="region" aria-label="Nos services à découvrir" tabindex="0">
            <article class="news-card">
                <img src="assets/img/black-friday.png" alt="Un technicien travaille sur un ordinateur">
                <div class="news-card-content">
                    <h2>Black Friday 2026</h2>
                    <p>Particuliers ? Découvrez nos offres spéciales !</p>
                    <a href="services.php">Découvrir nos bons plans.</a>
                </div>
            </article>
            <article class="news-card">
                <img src="assets/img/log-services.png" alt="Illustration d’un service de réparation">
                <div class="news-card-content">
                    <h2>Réparation et maintenance</h2>
                    <p>Un équipement à réparer ou à entretenir ? Nous pouvons vous accompagner.</p>
                    <a href="services.php#Réparation">En savoir plus</a>
                </div>
            </article>
            <article class="news-card">
                <img src="assets/img/contact.png" alt="Illustration d’un téléphone et d’un courriel">
                <div class="news-card-content">
                    <h2>Un projet à concrétiser ?</h2>
                    <p>Expliquez-nous votre besoin et demandez un devis adapté à votre projet.</p>
                    <a href="devis.html">Demander un devis</a>
                </div>
            </article>
        </div>
    </section>
<?php include "assets/php/inc/pied.php"; ?>
</body>
</html>