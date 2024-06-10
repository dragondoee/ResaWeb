<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Confirmation - Quest & Coffee</title>
</head>
<style>
    main {
        text-align: center;
    }

    main a {
        margin-top: 50px;
    }
</style>

<body>
    <!-- Header -->
    <?php require "header.php"; ?>

    <main>
    </main>

    <!-- Contenu -->
    <script>


        var prenom = localStorage.getItem('prenom');
        var mail = localStorage.getItem('mail');
        var date = localStorage.getItem('date');
        var horaire = localStorage.getItem('horaire');
        document.querySelector("main").innerHTML += '<h1> Réservation réussie </h1>'
            + '<p>Un mail de confirmation vous a été envoyé à l\'adresse mail ' + mail + ', '
            + 'n\'hésitez pas à vérifier vos SPAMs</p>'
            + '<p>Merci ' + prenom + ' pour votre réservation, on se retrouve le ' + date + ' à ' + horaire + '</p>'
            + '<a href="index.php" class="button-style centerElem " id="content">retour à l\'accueil</a>';


    </script>


    <!-- Footer -->
    <?php require "footer.php"; ?>
</body>

</html>