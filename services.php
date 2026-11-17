<?php include "assets/php/inc/infos.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech - Solutions - Nos Services</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "assets/php/inc/menu.php"; ?>
    <center>
        <img src="assets/img/services.png" width="300" height="200" alt="Nos-services">
        <h1>Nos Services</h1>
        <p>Bienvenue sur notre page de services ! Nous offrons une gamme complète de solutions technologiques pour répondre à vos besoins.</p>
            <br></br></center>

    <table width="100%" border="1">
        <tr>
            <th>Formule</th>
            <th>Ce qui est compris</th>
            <th>Tarif HT</th>
            <th>Tarif TTC</th>
        </tr>
        <tr>
            <td>Essentiel</td>
            <td>Intervention à la demande, prix de l'heure</td>
            <td><?php echo $essentiel; ?> euros</td>
            <td><?php echo $essentiel * (100 + $tva) / 100; ?> euros</td>
        </tr>
        <tr>
            <td>Sérénité</td>
            <td>Maintenance et sauvegarde, prix par mois</td>
            <td><?php echo $serenite; ?> euros</td>
            <td><?php echo $serenite * (100 + $tva) / 100; ?> euros</td>
        </tr>
        <tr>
            <td>Premium</td>
            <td>Tout compris, assistance illimitée, prix par mois</td>
            <td><?php echo $premium; ?> euros</td>
            <td><?php echo $premium * (100 + $tva) / 100; ?> euros</td>
        </tr>
    </table>

<center>
        <h2>Découvrez nos services parmis les catégories suivantes :</h2>
</center>

    <table width="100%">
        <tr>
            <td class="table-gauche"><center><h2><a href="#Ordinateurs">Ordinateurs</a></h2></center></td>
            <td class="table-droite"><center><h2><a href="#Serveurs">Serveurs</a></h2></center></td>
        </tr>
        <br></br>
        <br></br>
        <tr>
            <td class="table-gauche"><center><h2><a href="#Réparation">Réparation / Maintenance</a></h2></center></td>
            <td class="table-droite"><center><h2><a href="#Périphériques">Périphériques</a></h2></center></td>
        </tr>
    </table>
    <br></br>
    <br></br>
    <br></br>

<section id="Ordinateurs">
    <h2>Ordinateurs</h2>
    <p>Nous proposons une large gamme d'ordinateurs de bureau et portables adaptés à vos besoins professionnels et personnels.</p>
</section>

    <br></br>
    <br></br>
    <br></br>

<section id="Serveurs">
    <h2>Serveurs</h2>
    <p>Nous offrons des solutions de serveurs robustes et évolutives pour répondre à vos besoins informatiques.</p>
</section>

    <br></br>
    <br></br>
    <br></br>

<section id="Réparation">
    <h2>Réparation / Maintenance</h2>
    <p>Nos équipes techniques sont à votre disposition pour effectuer des réparations et des maintenances régulières de vos équipements.</p>
</section>

    <br></br>
    <br></br>
    <br></br>

<section id="Périphériques">
    <h2>Périphériques</h2>
    <p>Nous fournissons une large gamme de périphériques informatiques de qualité pour compléter votre setup.</p>
</section>

<section id="Catalogue">
    <h2>Notre catalogue de produits</h2>
    <p>Consultez les produits disponibles, classés par catégorie, avec leur référence et leur prix hors taxes.</p>
    <p><a href="catalogue.php">Voir le catalogue de produits</a></p>
</section>

<section id="Devis">
    <h2>Demander un devis</h2>
    <p>Si vous souhaitez nous contacter pour plus d'informations, vous pouvez le faire via la rubrique <a href="contact.php">Nous contacter</a>.</p>
    <p>Pour demander un devis, vous pouvez <a href="devis.html">cliquer ici </a>.</p>
</section>

<?php include "assets/php/inc/pied.php"; ?>
</body>
</html>