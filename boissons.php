<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-boisson.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Boissons - Quest & Coffee</title>
</head>

<body>

    <!-- Header -->
    <?php require "header.php"; ?>

    <!-- Main -->
    <main>

        <h1 id="content">Boissons</h1>
        <p id="bandeauTxt">Voici la liste des boissons originals de Quest & Coffee à la carte ! Les informations
            concernant les autres
            boissons sont disponible sur place. <br> Rappel : Les boissons, même commandée en avance, sont à payer sur
            place et une carte d'identité sera demandé pour les boissons alcoolisé, la vente d'alcool est interdit au
            mineur. </p>

        <hr>

        <!-- Zone filtre -->
        <span class="filtre">
            <details>
                <summary>Trier par </summary>
                <div>
                    <a href="boissons.php">Recommandé</a>
                    <a href="boissons.php?tri=nom_boisson">Nom de la boisson</a>
                    <a href="boissons.php?tri=prix">Plus petit prix</a>
                </div>
            </details>

        </span>

        <!-- Liste salles -->
        <span class="liste-boissons">
            <?php require "connexion.php";

            $requete = "SELECT * FROM boisson";

            // Tri PHP
            if (isset($_GET["tri"])) {
                $requete = $requete . ' ORDER BY ' . $_GET["tri"];
            }

            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                foreach ($result as $boisson) {
                    ?>

                    <div class="boisson">
                        <img src="img/boisson/<?= $boisson["img_boisson"]; ?>" alt="">
                        <span class="txt-boisson">
                            <h2><?= $boisson["nom_boisson"]; ?></h2>
                            <p><?= $boisson["description_boisson"]; ?></p>
                        </span>
                        <p><?= $boisson["prix"]; ?>€</p>
                    </div>



                    <?php
                }
            } else {
                echo "Aucun résultat trouvé";
                echo '<a href="salles.php">Voir toutes les salles</a>';
            }
            ?>
        </span>
        <a href="#top" class="button-style centerElem">Retour haut de page</a>

    </main>

    <!-- Footer -->
    <?php require "footer.php"; ?>


</body>

</html>