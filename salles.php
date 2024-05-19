<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-salle.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Salles - Quest & Coffee</title>
</head>

<body>

    <!-- Header -->
    <?php require "header.php"; ?>

    <!-- Main -->
    <main>

        <h1>Salles</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quis adipisci vero? Sapiente rem
            voluptatum magni dicta distinctio consequuntur fugit. Debitis voluptatem, expedita repellat accusamus
            nesciunt est inventore ipsam quibusdam!</p>

        <hr>

        <!-- Zone filtre -->
        <span class="filtre">
            <button>Filtre 1 </button>
            <button>Filtre 2</button>
            <a href="salles.php?tri=nom_salle">Nom de la salle</a>
            <!-- J'affiche pas les infos donc c'est bizarre -->
            <a href="salles.php?tri=prix_salle">Prix</a>
            <a href="salles.php?tri=ambiance">Ambiance</a>
        </span>

        <!-- Liste salles -->
        <span class="liste-salles">
            <?php require "connexion.php";

            $requete = "SELECT * FROM salle";

           
            // Barre de recherche
            if (isset($_GET["search"])) {
                $requete = $requete . ' WHERE CONCAT(nom_salle, description_salle, jeu) LIKE "%' . $_GET["search"] . '%"';
            }

             // Tri PHP
             if (isset($_GET["tri"])) {
                $requete = $requete . ' ORDER BY ' . $_GET["tri"];
            }

            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                foreach ($result as $salle) {
                    ?>

                    <div>
                        <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><img
                                src="img/salle/<?= $salle["photo_salle"]; ?>"
                                alt="lien vers les détails de la salle <?= $salle["nom_salle"]; ?> "></a>
                        <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><?= $salle["nom_salle"]; ?></a>
                    </div>


                    <?php
                }
            } else {
                echo "Aucun résultat trouvé";
            }
            ?>
        </span>

    </main>

    <!-- Footer -->
    <?php require "footer.php"; ?>

</body>

</html>