<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Quest & Coffee</title>
</head>
<body>
    <!-- Header -->
    <?php require "header.php"; ?>


<form action="traitement.php">

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

        <input type="submit" name="bouton_soumettre" value="Envoyer">
</form>

</body>
</html>