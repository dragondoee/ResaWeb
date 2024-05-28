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

        <h1 id="content">Salles</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quis adipisci vero? Sapiente rem
            voluptatum magni dicta distinctio consequuntur fugit. Debitis voluptatem, expedita repellat accusamus
            nesciunt est inventore ipsam quibusdam!</p>

        <hr>

        <!-- Zone filtre -->
        <span class="filtre">
            <form action="">
                <select name="filtre" id="filtre">
                    <option value="0">Tout voir</option>
                    <option value="1">Aventure</option>
                    <option value="2">Horreur</option>
                    <option value="3">Cozy</option>
                </select>
                <input type="button" name="filtrer" id="filtrer" value="Filtrer">
            </form>
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

                    <div class="salle" data-ambiance="<?= $salle["ambiance"]; ?>">
                        <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><img
                                src="img/salle/<?= $salle["photo_salle"]; ?>"
                                alt="lien vers les détails de la salle <?= $salle["nom_salle"]; ?> "></a>
                        <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><?= $salle["nom_salle"]; ?></a>
                    </div>

                    

                    <?php
                }
            } else {
                echo "Aucun résultat trouvé";
                echo '<a href="salles.php">Voir toutes les salles</a>'  ;
            }
            ?>
        </span>


    </main>

    <!-- Footer -->
    <?php require "footer.php"; ?>
        
    <!-- JS -->
    <script src="salles-script.js"></script>
</body>

</html>