<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-resa.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Réservation - Quest & Coffee</title>
</head>

<body>
    <!-- Header -->
    <?php require "header.php"; ?>

    <!-- Formulaire -->
    <main>
        <div>
            <form action="traitement.php">
                <fieldset>
                    <legend>Responsable</legend>
                    <!-- Nom -->
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>
                    <br> <br>
                    <!-- Prénom -->
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>
                    <br> <br>
                    <!-- Adresse mail -->
                    <label for="mail">Adresse mail</label>
                    <input type="email" id="mail" name="mail" required>
                    <br> <br>
                    <input type="button" name="bouton_soumettre" value="Suivant">
                </fieldset>
        </div>
        <div class="cach">
            <fieldset>
                <legend>Réservation</legend>
                <!-- Salle -->
                <label for="salle">Salle</label>
                <select name="salle" id="salle">
                    <option value="">Choisir une salle</option>
                    <?php require "connexion.php";
    
                    $requete = "SELECT * FROM salle";
                    $stmt = $db->query($requete);
                    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                    foreach ($result as $salle) {
                        ?>
                        <option value="<?= $salle["id_salle"]; ?>"><?= $salle["nom_salle"]; ?></option>
                        <?php
                    }
                    ?>
                </select>

                <br> <br>
                <!-- Date -->
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
                <br> <br>
                <!-- Horaire -->
                <label for="horaire">Horaire</label>
                <select name="horaire" id="horaire">
                    <option value="">Choisir un horaire</option>
                    <option value="009:00:00">9h00</option>
                    <option value="009:30:00">9h30</option>
                    <option value="010:00:00">10h00</option>
                    <option value="010:30:00">10h30</option>
                    <option value="011:00:00">11h00</option>
                </select>
                <br> <br>
                <!-- Durée -->
                <label for="duree">Durée</label>
                <select name="duree" id="duree">
                    <option value="">Choisir une durée</option>
                    <option value="01:00:00">1h</option>
                    <option value="01:30:00">1h30</option>
                    <option value="02:00:00">2h</option>
                </select>
                <br><br>
                <!-- Participant -->
                <label for="participant">Participant</label>
                <input type="number" id="participant" name="participant" required>
                <br> <br>
                <input type="submit" name="bouton_soumettre" value="Envoyer">
            </fieldset>
            </form>
        </div>


    </main>

    <!-- Footer -->
    <?php require "footer.php"; ?>

</body>

</html>