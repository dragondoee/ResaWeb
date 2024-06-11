<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-propos.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>À propos - Quest & Coffee</title>
</head>

<body>

    <!-- Header -->
    <?php require "header.php"; ?>

    <!-- Main -->
    <main>
        <h1 id="content" data-aos="fade-in" data-aos-duration="1500">À propos</h1>

        <div class="propos-quest">
            <span data-aos="fade-right" data-aos-duration="1500">
                <h2>Quest & Coffee</h2>
                <p>

                    Chez Quest & Coffee, le jeu est au cœur de tout ce que nous faisons. Fondé par des passionnés de
                    jeux vidéo, nous créons des aventures captivantes et immersives qui repoussent les limites de
                    l'imagination.
                    <br><br>
                    Mais Quest & Coffee, c'est aussi un café unique proposant des salles à thèmes inspirées de nos jeux.
                    Avec quatre salles disponibles, chaque détail est pensé pour offrir une expérience inoubliable.
                    Réservez une table, savourez nos délicieuses boissons, et plongez dans nos mondes fantastiques.
                    <br><br>
                    Bienvenue chez Quest & Coffee – où le jeu rencontre le gourmand.
                </p>
            </span>
            <img src="img/mascotte.png" alt="" data-aos="fade-left" data-aos-duration="1500">
        </div>

        <!-- Bandeau -->

        <div class="bandeau" >
            <p>Polyvalents dans notre approche, nous explorons plusieurs genres de jeux pour repousser les limites de
                notre imagination et créativité, et pour tester de nouvelles idées.</p>
        </div>

        <!-- Cases -->
        <div class="cases">
            <p>Aventure</p>
            <p>Fantaisie</p>
            <p>Ambiance chill</p>
            <p>Horreur</p>
        </div>

        <hr>

        <div class="propos-moi">
            <span data-aos="fade-left" data-aos-duration="1000">
                <h2>À propos de moi</h2>
                <p>Emilie Desgranges, actuellement étudiante en première année de BUT Métier du Multimédia et de l’Internet à Champs-sur-Marne, j'ai développé ce site de réservation dans le cadre d'un projet du deuxième semestre. Passionnée par le développement, j'ai pris beaucoup de plaisir à intégrer les différentes fonctionnalités du site. J’ai mis du temps avant de bien m’organiser, donc j’ai pris un peu de retard par rapport à mes ambitions. Je suis convaincue qu’en étant efficace dès le début,  j’aurais pu me surpasser et améliorer l'aspect visuel.
                </p>
            </span>
            <img src="img/emilie.jpg" alt="" data-aos="fade-right" data-aos-duration="1000">
        </div>
        <!-- Cases -->
        <div class="cases">
            <p>BUT MMI</p>
            <p>Développement web</p>
            <p>Jeux vidéos</p>
        </div>



    </main>
    <!-- Footer -->
    <?php require "footer.php"; ?>


    <script>
        AOS.init();
    </script>
</body>

</html>