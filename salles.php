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
            <button>Trie 1</button>
            <button>Trie 2</button>
        </span>

        <!-- Liste salles -->
        <span class="liste-salles">
            <?php require "connexion.php";

            $requete = "SELECT * FROM salle";

            if (isset($_GET["tri"])) {
                $requete = $requete . ' ORDER BY ' . $_GET["tri"];
            }

            $stmt = $db->query($requete);
            $result = $stmt->fetchall(PDO::FETCH_ASSOC);
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
            ?>
        </span>

    </main>

    <!-- Footer -->
    <?php require "footer.php"; ?>

</body>

</html>