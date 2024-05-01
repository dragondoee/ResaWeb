<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_propos.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Ateliers - Coffee Studio</title>
</head>
<body>

<!-- Header -->
<?php require "header.php"; ?>

<h1>Liste Salles : </h1>

<!-- Zone filtre -->



<!-- Liste Ateliers -->

<?php require "connexion.php" ;

        $requete="SELECT * FROM salle";

        if(isset($_GET["tri"])){
            $requete = $requete.' ORDER BY '.$_GET["tri"];
        }

        $stmt=$db->query($requete);
        $result=$stmt->fetchall(PDO::FETCH_ASSOC);
            foreach($result as $atelier){
        ?>

        <div>
            <!-- <img src="images/cafe.png" alt=""> -->
            <a href="detail.php?id_salle=<?= $atelier["id_salle"];?>"><?= $atelier["nom_salle"];?></a>
            <p></p>
        </div>
        

        <?php
            }
        ?>


<!-- Footer -->
<?php require "footer.php"; ?>

</body>
</html>