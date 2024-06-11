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
    $requete = "SELECT * FROM salle, ambiance WHERE id_salle=$id_salle AND ambiance=id_ambiance";
    $stmt = $db->query($requete);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <title><?= $result["nom_salle"]; ?> - Quest & Coffee</title>
</head>

<body>

    <!-- Header -->
    <?php require "header.php"; ?>

    <main>
        <!-- Contenu -->
        <div class="contenu">
            <span>
                <a href="salles.php">Retour à la liste des salles</a>
                <h1 id="content"><?= $result["nom_salle"]; ?></h1>
                <!-- Images -->
                <img src="img/salle/<?= $result["photo_salle"]; ?>" alt="">
            </span>

            <!-- Description -->
            <span class="description">
                <h2>Description : </h2>
                <p><?= $result["description_salle"]; ?></p>

                <!-- Lien -->
                <span class="lien">
                    <a class="button-style" href="reservation.php?salle=<?= $id_salle ?>">Réserver une
                        salle</a>
                    <a class="button-style" target="_blank" href="https://store.steampowered.com/?l=french">Découvrir le
                        jeu</a>
                </span>
            </span>
        </div>



        <!-- Cases -->
        <div class="cases">
            <!-- Jeu -->
            <span>
                <h2>Jeu d'origine : </h2>
                <p><?= $result["jeu"]; ?></p>
            </span>
            <!-- Ambiance -->
            <span>
                <h2>Ambiance : </h2>
                <p><?= $result["nom_ambiance"]; ?></p>
            </span>
            <!-- Prix -->
            <span>
                <h2>Prix : </h2>
                <p><?= $result["prix_salle"]; ?>€/h</p>
            </span>
        </div>

        <hr>

        <!-- Texte de fin -->
        <div class="end-txt">
            <p>Café accessible uniquement sur réservation. Vous pouvez effectuer la réservation juste avant de prendre
                une table
                à condition qu'il y ait encore de la place.</p>
            <p>Toute personne en retard de plus de 15min, non prévenu, se verra annuler sa réservation, les places
                seront de
                nouveaux disponibles.</p>
        </div>
    </main>



    <!-- Footer -->
    <?php require "footer.php"; ?>

</body>

</html>