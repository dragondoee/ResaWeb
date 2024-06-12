<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_index.css">
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
    <title>Accueil - Quest & Coffee</title>
</head>

<body>
    <!-- Header -->
    <header>
        <a href="#content" class="skip-link">Aller au contenu</a>
        <div class="intro">
            <h1 >Quest & Coffee</h1>
            <p>Là où le jeu rencontre le gourmand</p>
            <nav>
                <a href="salles.php">Découvrir les salles</a>
                <a href="boissons.php">Voir la carte des boissons</a>
                <a href="reservation.php">Réserver une table</a>
                <a href="propos.php">En savoir plus</a>
            </nav>
        </div>
        <div>
            <img class="down_wave" src="img/down_wave.svg" alt="">
            <img class="up_wave" src="img/up_wave.svg" alt="">
            <img class="cafe shapeG1 animated-image delay1 rotate1" src="img/red_cafe.png" alt="">
            <img class="cafe shapeG2 animated-image delay3 rotate2" src="img/red_cafe.png" alt="">
            <img class="cafe shapeD3 animated-image delay1 rotate3" src="img/red_cafe.png" alt="">
            <img class="cafe shapeD4 animated-image delay2 rotate4" src="img/red_cafe.png" alt="">
            <img class="cafe shapeD5 animated-image delay3 rotate5" src="img/red_cafe.png" alt="">
        </div>
    </header>


    <!-- Transition  -->
    <img class="gouttes" src="img/header-background.svg" alt="">



    <main>
        <!-- Introduction -->
        <div class="cafe presentation">
            <div data-aos="fade-right" data-aos-duration="1000">
                <h2 id="content">Notre café</h2>
                <p>Chez Quest & Coffee, l'univers du jeu vidéo rencontre le plaisir de la dégustation. Chaque salle vous
                    invite à l'aventure, où vous pouvez explorer de nouveaux mondes tout en savourant des boissons
                    artisanales et des délices gourmands. Que ce soit pour une pause relaxante ou un moment convivial
                    avec vos amis, notre ambiance chaleureuse et accueillante est idéale pour les gamers et les
                    gourmets. Réservez une table dans une salle à thème inspirée d'un jeu vidéo du studio Quest & Coffee
                    et venez vivre une expérience où l'excitation du jeu se mêle à la délectation des saveurs.</p>
                <a href="salles.php" class="button-style centerElem">Découvrir nos salles -></a>
            </div>
            <img src="img/mascotte.png" alt="" data-aos="fade-left" data-aos-duration="1000">
        </div>



        <!-- Slider des nouveautés-->
        <section>
            <div class="nouveaute">

                <div class="text">
                    <h3> Nouveautés : </h3>
                    <p> Découvrez nos nouvelles salles</p>

                </div>
                <!-- Slider -->
                <div class="ListeSalles">
                    <?php require "connexion.php";
                    $requete = "SELECT * FROM salle WHERE nouveaute=1;";
                    $compteur = 1;
                    $stmt = $db->query($requete);
                    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                    foreach ($result as $salle) {
                        ?>
                        <div class="carteSalle" data-aos="fade-in" data-aos-duration="1000">
                            <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>">
                                <img src="img/salle/<?= $salle["photo_salle"]; ?>"
                                    alt="lien vers les détails de la salle <?= $salle["nom_salle"]; ?> ">
                            </a>
                            <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><?= $salle["nom_salle"]; ?></a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button id="buttonVoirTendances"> Voir les tendances </button>
            </div>
            </div>

            <!-- Slider des tendances-->
            <div class="tendance cache">
                <div class="text">
                    <h3> Tendances : </h3>
                    <p> Découvrez nos salles les plus demandées ! </p>

                </div>
                <div class="ListeSalles">
                    <?php
                    $requete = "SELECT salle.*, COUNT(id_resa) AS reservation_count FROM salle LEFT JOIN reservation ON salle.id_salle = id_salle GROUP BY salle.id_salle ORDER BY reservation_count DESC LIMIT 2;";
                    $compteur = 1;
                    $stmt = $db->query($requete);
                    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                    foreach ($result as $salle) {
                        ?>
                        <div class="carteSalle" data-aos="fade-in" data-aos-duration="1000">
                            <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>">
                                <img src="img/salle/<?= $salle["photo_salle"]; ?>"
                                    alt="lien vers les détails de la salle <?= $salle["nom_salle"]; ?> ">
                            </a>
                            <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><?= $salle["nom_salle"]; ?></a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button id="buttonVoirNouveaute"> Voir les nouveautés </button>
            </div>
            </div>
        </section>


        <!-- Barre de recherche -->
        <div class="search-section">
            <h3>Vous cherchez une salle en particulier ?</h3>
            <form action="salles.php">
                <label for="search" class="sr-only">Rechercher</label>
                <input type="text" name="search" id="search" placeholder="Rechercher....">
                <input type="submit" name="envoyer" id="envoyer" class="button-style small-button" value="Chercher">
            </form>
        </div>

        <!-- Studio -->
        <div class="studio presentation">
            <div data-aos="fade-left" data-aos-duration="1000">
                <h2>Studio de jeux</h2>
                <p>
                    Bienvenue chez Quest & Coffee, où la magie des jeux vidéo prend vie. Notre studio est dédié à la
                    création de jeux d'aventure captivants, conçus pour transporter les joueurs dans des mondes
                    extraordinaires et immersifs. Avec une équipe passionnée de développeurs, designers et artistes,
                    nous mettons tout en œuvre pour offrir des expériences de jeu inoubliables. Plongez dans nos
                    univers, explorez des quêtes épiques et vivez des aventures palpitantes à chaque instant. Chez Quest
                    & Coffee, chaque jeu est une nouvelle quête, et nous sommes impatients de partager cette passion
                    avec vous.

                </p>

                <a href="propos.php" class="button-style centerElem">En savoir plus -></a>
            </div>
            <img src="img/logo.png" alt="" data-aos="fade-right" data-aos-duration="1000">
        </div>


        <hr>

        <blockquote data-aos="fade-down" data-aos-duration="800">
            Rejoignez-nous dans cette aventure passionnante et découvrez comment nous transformons des idées en
            réalité ludique. Chez Quest & Coffee, chaque jeu est une quête, et nous sommes impatients de
            partager cette passion avec vous.
        </blockquote>


        <hr>

        <a href="#top" class="button-style centerElem scrollButton">Retour haut de page</a>
    </main>
    <!-- Footer -->
    <?php require "footer.php"; ?>

    <script>
        AOS.init();

        // Voir les tendances
        document.querySelector("#buttonVoirTendances").addEventListener("click", function () {
            document.querySelector(".nouveaute").style.display = 'none';
            document.querySelector(".tendance").style.display = 'flex';
        })

        // Voir les nouveautés
        document.querySelector("#buttonVoirNouveaute").addEventListener("click", function () {
            document.querySelector(".nouveaute").style.display = 'flex';
            document.querySelector(".tendance").style.display = 'none';
        })
    </script>
</body>

</html>