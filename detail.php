<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_detail.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <?php require "connexion.php";
        $id_salle = $_GET["id_salle"];
        $requete = "SELECT * FROM salle WHERE id_salle=$id_salle";
        $stmt = $db->query($requete);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <title><?= $result["nom_salle"]; ?> - Quest & Coffee</title>
</head>

<body>

    <!-- Header -->
    <?php require "header.php"; ?>

    <!-- Contenu -->
    <a href="salles.php">Retour à la liste des salles</a>
    <h1><?= $result["nom_salle"]; ?></h1>

    <!-- Images -->

    <img src="img/salle/<?= $result["photo_salle"]; ?>" alt="">
    <img src="img/perso/<?= $result["perso_salle"]; ?>" alt="">

    <!-- Description -->

    <h2>Description : </h2>
    <p><?= $result["description_salle"]; ?></p>

    <!-- Lien -->

    <a href="reservation.php">Réserver une salle</a>
    <a href="https://store.steampowered.com/?l=french">Découvrir le jeu</a>

    <!-- Prix -->
    <h2>Prix : </h2>
    <p><?= $result["prix_salle"]; ?>€</p>
    <p>Le prix des salles varies selon la demande, les boissons ne sont pas inclues dans la réservation</p>


    <!-- Footer -->
    <?php require "footer.php"; ?>

</body>

</html>