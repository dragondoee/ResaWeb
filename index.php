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
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Accueil - Quest & Coffee</title>
</head>

<body>
    <!-- Header -->
    <header>
        <a href="#content" class="skip-link">Aller au contenu</a>
        <div class="intro">
            <h1 id="content">Quest & Coffee</h1>
            <p>Là où le jeu rencontre le gourmand</p>
            <nav>
                <a href="salles.php">Découvrir les salles</a>
                <a href="boissons.php">Voir la carte des boissons</a>
                <a href="reservation.php">Réserver une table</a>
                <a href="propos.php">En savoir plus</a>
            </nav>
        </div>
    </header>


    <!-- Transition  -->
    <img class="gouttes" src="img/header-background.svg" alt="">



    <main>
        <!-- Introduction -->
        <div class="cafe presentation">
            <div>
                <h2>Notre café</h2>
                <p>Chez Quest & Coffee, l'univers du jeu vidéo rencontre le plaisir de la dégustation. Chaque salle vous invite à l'aventure, où vous pouvez explorer de nouveaux mondes tout en savourant des boissons artisanales et des délices gourmands. Que ce soit pour une pause relaxante ou un moment convivial avec vos amis, notre ambiance chaleureuse et accueillante est idéale pour les gamers et les gourmets. Réservez une table dans une salle à thème inspirée d'un jeu vidéo du studio Quest & Coffee et venez vivre une expérience où l'excitation du jeu se mêle à la délectation des saveurs.</p>
                <a href="salles.php" class="button-style centerElem">Découvrir nos salles -></a>
            </div>
            <img src="img/mascotte.png" alt="">
        </div>



        <!-- Slider des nouveautés-->
        <section>
            <div class="nouveaute">

                <div class="text">
                    <h3> Nouveautés : </h3>
                    <p> Découvrez nos nouvelles salles</p>
                    <button> Voir les tendances </button>
                </div>
                <!-- Slider -->
                <div class="slider">
                    <div class="js-slider">
                        <div class="js-photos"></div>
                        <?php require "connexion.php";
                        $requete = "SELECT * FROM salle WHERE nouveaute=1;";
                        $compteur = 1;
                        $stmt = $db->query($requete);
                        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                        foreach ($result as $salle) {
                            ?>
                            <div class=" js-photo photo<?= $compteur ?> ">
                                <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>">
                                    <img src="img/salle/<?= $salle["photo_salle"]; ?>"
                                        alt="lien vers les détails de la salle <?= $salle["nom_salle"]; ?> ">
                                </a>
                                <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><?= $salle["nom_salle"]; ?></a>
                            </div>
                            <?php
                            $compteur += 1;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- <nav class="js-nav">
                <button class="js-nav-left"><img src="img/fleche_old.svg" alt="Voir l'image de gauche"> </button>
                <button class="js-nav-right"><img src="img/fleche_old.svg" alt="Voir l'image de droite"> </button>
            </nav> -->
            </div>

            <!-- Slider des tendances-->
            <div class="tendance cache">
            <div class="text">
                    <h3> Tendances : </h3>
                    <p> Découvrez nos salles en tendance ! </p>
                    <button> Voir les nouveautés </button>
                </div>
                <div class="slider">
                    <div class="js-slider">
                        <div class="js-photos"></div>
                        <?php
                        $requete = "SELECT *,COUNT(id_resa) FROM salle,reservation WHERE salle=id_salle ORDER BY COUNT(id_resa) LIMIT 2;";
                        $compteur = 1;
                        $stmt = $db->query($requete);
                        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                        foreach ($result as $salle) {
                            ?>
                            <div class=" js-photo photo<?= $compteur ?> ">
                                <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>">
                                    <img src="img/salle/<?= $salle["photo_salle"]; ?>"
                                        alt="lien vers les détails de la salle <?= $salle["nom_salle"]; ?> ">
                                </a>
                                <a href="detail.php?id_salle=<?= $salle["id_salle"]; ?>"><?= $salle["nom_salle"]; ?></a>
                            </div>
                            <?php
                            $compteur += 1;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- <nav class="js-nav">
                <button class="js-nav-left"><img src="img/fleche_old.svg" alt="Voir l'image de gauche"> </button>
                <button class="js-nav-right"><img src="img/fleche_old.svg" alt="Voir l'image de droite"> </button>
            </nav> -->
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
            <div>
                <h2>Studio de jeux</h2>
                <p>
                Bienvenue chez Quest & Coffee, où la magie des jeux vidéo prend vie. Notre studio est dédié à la création de jeux d'aventure captivants, conçus pour transporter les joueurs dans des mondes extraordinaires et immersifs. Avec une équipe passionnée de développeurs, designers et artistes, nous mettons tout en œuvre pour offrir des expériences de jeu inoubliables. Plongez dans nos univers, explorez des quêtes épiques et vivez des aventures palpitantes à chaque instant. Chez Quest & Coffee, chaque jeu est une nouvelle quête, et nous sommes impatients de partager cette passion avec vous.

                </p>

                <a href="propos.php" class="button-style centerElem">En savoir plus -></a>
            </div>
            <img src="img/mascotte.png" alt="">
        </div>


        <hr>

        <blockquote>
            Rejoignez-nous dans cette aventure passionnante et découvrez comment nous transformons des idées en
            réalité ludique. Chez Quest & Coffee, chaque jeu est une quête, et nous sommes impatients de
            partager cette passion avec vous.
        </blockquote>


        <hr>

        <a href="#top" class="button-style centerElem">Retour haut de page</a>
    </main>
    <!-- Footer -->
    <?php require "footer.php"; ?>

</body>

</html>