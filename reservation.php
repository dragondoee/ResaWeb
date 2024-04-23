<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation - Coffee Studio</title>
</head>
<body>

<?php require "connexion.php"; ?>

<form action="insert_film.php">

    <!-- Nom -->
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
        <br> <br>

    <!-- Prénom -->
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" >
        <br> <br>

    <!-- Adresse mail -->
        <label for="mail">Adresse mail</label>
        <input type="mail" id="mail" name="mail" >
        <br> <br>

    <!-- Réalisateur -->
        <label for="atelier">Atelier</label>
        <select name="atelier" id="atelier">
            <option value="">Choisir...</option>
            <?php
            $requeteAtelier="SELECT * FROM atelier ";
            $stmtAtelier=$db->query($requeteAtelier);
            $resultAtelier=$stmtReal->fetchall(PDO::FETCH_ASSOC);
            foreach($resultAtelier as $atelier){
            ?>
                <option value="<?= $atelier["id_atelier"]; ?>"><?= $atelier["nom_atelier"]; ?></option>
            <?php
                };
            ?>
        </select>
        <br> <br>

    <!-- Date -->
        <label for="date">Date</label>
        <select name="date" id="date">
            <option value="">Choisir...</option>
            <?php
            $requeteDate="SELECT date FROM planning ";
            $stmtDate=$db->query($requeteDate);
            $resultDate=$stmtDate->fetchall(PDO::FETCH_ASSOC);
            foreach($resultDate as $date){
            ?>
                <option value="<?= $date["id_planning"]; ?>"><?= $date["date"]; ?></option>
            <?php
                };
            ?>
        </select>
        <br> <br>


        <input type="submit" name="bouton_soumettre" value="Envoyer">
</form>

</body>
</html>