<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_detail.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <?php require "connexion.php";
    $id_salle=$_GET["id_salle"];
    $requete="SELECT * FROM salle WHERE id_salle=$id_salle";
    $stmt=$db->query($requete);
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <title><?= $result["nom_salle"];?> - Coffee Studio</title>
</head>
<body>

<!-- Header -->
<?php require "header.php"; ?>

<!-- Contenu -->

<h1><?= $result["nom_salle"];?></h1>

<!-- Images -->

<img src="<?= $result["photo_salle"];?>" alt="">
<img src="<?= $result["perso_salle"];?>" alt="">
    
<!-- Description -->

<h2>Description : </h2>
<p><?= $result["description_salle"];?></p>

<!-- Lien -->

<a href="reservation.php">Réserver une salle</a>
<a href="https://store.steampowered.com/?l=french">Découvrir le jeu</a>

<!-- Prix -->
<h2>Prix : </h2>
<p><?= $result["prix_salle"];?>€</p>
<p>Le prix des salles varies selon la demande, les boissons ne sont pas inclues dans la réservation</p>


<!-- Footer -->
<?php require "footer.php"; ?>

<script src="script.js"></script>
</body>
</html>