<?php
include "assets/php/inc/infos.php";
require "assets/php/inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>
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

    <main class="users-container">
        <h1>Gestion des utilisateurs</h1>
        <p class="subtitle">Les comptes du personnel</p>
        <p class="count">Nombre de comptes : <?php echo count($utilisateurs); ?></p>

        <table class="users-table">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Service</th>
                    <th>Rôle</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurs as $u) { ?>
                <tr>
                    <td><?php echo $u["prenom"]; ?></td>
                    <td><?php echo $u["nom"]; ?></td>
                    <td><?php echo $u["service"]; ?></td>
                    <td><?php echo $u["role"]; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <?php include "assets/php/inc/pied.php"; ?>
</body>
</html>