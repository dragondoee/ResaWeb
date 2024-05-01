<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Quest & Coffee</title>
</head>
<body>
    <!-- Header -->
    <?php require "header.php"; 
    $email = $_GET['mail'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    ?>

    <?= $nom ?>
    <?= $prenom ?>
    <?= $email ?>


    <form action="traitement.php">
        <input type="submit" name="bouton_soumettre" value="Envoyer">
    </form>
    
</body>
</html>