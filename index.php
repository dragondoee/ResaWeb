<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_index.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Accueil - Quest & Coffee</title>
</head>
<body>
    <?php require "header.php"; ?>
    <div>
        <h1>Quest & Coffee</h1>
        <p>Là où le jeu rencontre le gourmand</p>
        <a href="salles.php">Découvrir nos salles</a>
        <a href="reservation.php">Réserver une table</a>
    </div>

    <!-- Transition  -->
    <img class="gouttes" src="images/header-background.svg" alt=""> 

<!-- Main -->
    <main>
        <!-- Introduction -->
        <div class="intro">
            <spawn>
            <h2 id="content">Notre café</h2>
                <p>Plongez dans un univers où la passion du jeu vidéo rencontre le plaisir de la dégustation. Chez Quest & Coffee, chaque salle est une invitation à l'aventure, un café où les amateurs de jeux peuvent se retrouver pour explorer de nouveaux mondes tout en savourant des boissons artisanales et des délices gourmands. Que vous soyez en quête d'une pause relaxante ou que vous cherchiez à partager un moment convivial avec vos amis dans une salle à l’allure de votre jeu préféré, notre ambiance chaleureuse et accueillante est conçue pour satisfaire les désirs des gamers et des gourmets. Rejoignez-nous pour une expérience où l'excitation du jeu se mêle à la délectation des saveurs, créant ainsi un lieu où chaque visite est une véritable aventure pour les sens.</p>
            </spawn>
                <img src="images/mascotte.png" alt="">
        </div>
        <hr>
        <div class="nouveaute">
            <!-- Slider des jeux Top ventes -->
            <h3> Nouveauté </h3>
            <!-- Slider des nouveautés-->
            <!-- Zone PHP  -->
            <div class="slider">
                <div class="js-slider">
                    <div class="js-photos">
                        
                        <div class=" js-photo photo4 clone">
                            <img src="images/tableau.jpg" alt="">
                            <h4> Nuit étoilé - Van Gogh </h4>
                        </div>
                        <!-- Page actuelle : changement avec une autre classe, qui se déplace avec le js -->
                        <div class="js-photo photo1"> 
                            <img src="images/pinguin.jpg" alt="">
                            <h4> Pinguin </h4>
                        </div>

                        <div class="js-photo photo2">
                            <img src="images/chat.jpg" alt="">
                            <h4> Chat </h4>
                        </div>
                        
                        <div class=" js-photo photo3">
                            <img src="images/nounours.jpg" alt="">
                            <h4> Nounours </h4>
                        </div>

                        <div class=" js-photo photo4 clone">
                            <img src="images/tableau.jpg" alt="">
                            <h4> Nuit étoilé - Van Gogh </h4>
                        </div>

                        <div class="js-photo photo1 clone">
                            <img src="images/pinguin.jpg" alt="">
                            <h4> Pinguin </h4>
                        </div>

                    </div>
                </div>
            </div>
                 <nav class="js-nav"> 
                    <button class="js-nav-left" ><img src="images/fleche.svg" alt="Voir l'image de gauche"> </button>
                    <button class="js-nav-right" ><img src="images/fleche.svg" alt="Voir l'image de gauche"> </button>
                </nav>
             
        </div>
        <hr>
        <!-- Plus d'infos -->
        <div class="infos">
            <h3>Plus d'infos</h3>
            <span>
                <p>Coffee studio vous invite dans un nouveau monde de jeu en plus de vous proposez des ateliers pour réaliser votre boissons préféré digne de votre barista habituelle. ut tincidunt libero ornare et. Duis at sapien a leo mattis pellentesque. Etiam molestie aliquam leo eu scelerisque. Donec ut fermentum nisi. Praesent varius sem nec lectus tempus, sed tristique justo pulvinar. Morbi nec nibh laoreet dui eleifend rutrum. </p>
                <img src="images/pinguin.jpg" alt="">
            </span>
        </div>

        <a class="atelier" href="atelier.php">Découvrir les ateliers</a>

        <hr>
        <blockquote>Quest & Coffee n'est pas seulement un café ludique, c'est aussi le studio derrière certains des jeux les plus appréciés de la communauté. Chez Quest & Coffee, le jeu est au cœur de tout ce que nous faisons, et nous sommes ravis de partager cette passion avec vous.</blockquote>

    </main>
    <!-- Footer -->
    <?php require "footer.php"; ?>

    <script src="script.js"></script>
</body>
</html>