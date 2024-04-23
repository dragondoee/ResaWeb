<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_index.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Accueil - Coffee Studio</title>
</head>
<body>
    <header>
        <!-- JS NEEDED pour l'animation de l'accueil -->
        <a href="#content" class="skip-link">Aller au contenu</a>
        <nav>
            <a class="retourAccueil" href="index.php"><img src="images/logo.png" alt="retour à l'accueil"></a>
            <ul>
                <!-- <li><a href="">Jeux</a></li> -->
                <li><a href="inedex.php">Accueil</a></li>
                <li><a href="atelier.php">Ateliers</a></li>
                <li><a href="propos.php">À propos</a></li>
            </ul>
        </nav>
        <h1>Coffee Studio</h1>
        <a class="suite" href="#content"><img class="suite" src="images/header-fleche.svg" alt=""></a>
    </header>

    <!-- Transition  -->
    <img class="gouttes" src="images/header-background.svg" alt=""> 

<!-- Main -->
    <main>
        <!-- Introduction -->
        <div class="intro">
            <spawn>
            <h2 id="content">Notre studio</h2>
                <p>Coffee studio vous invite dans un nouveau monde de jeu en plus de vous proposez des ateliers pour réaliser votre boissons préféré digne de votre barista habituelle. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste quibusdam maxime impedit dolorum sed sit voluptatibus officia esse eius repellat, unde sunt itaque deserunt vero earum pariatur nulla laboriosam alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptatum pariatur harum repellat odit, eveniet eaque distinctio, modi adipisci labore ab aut doloribus autem consequuntur amet voluptas sed totam cum.</p>
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
                            <ul>
                                <li>tableau</li>
                                <li>1895</li>
                                <li>Van Gogh</li>
                            </ul>
                            <p>Magnifique tableau de Van Gohg</p>
                        </div>
                        <!-- Page actuelle : changement avec une autre classe, qui se déplace avec le js -->
                        <div class="js-photo photo1"> 
                            <img src="images/pinguin.jpg" alt="">
                            <h4> Pinguin </h4>
                            <ul>
                                <li>tableau</li>
                                <li>1895</li>
                                <li>Van Gogh</li>
                            </ul>
                            <p>Magnifique tableau de Van Gohg</p>
                        </div>

                        <div class="js-photo photo2">
                            <img src="images/chat.jpg" alt="">
                            <h4> Chat </h4>
                            <ul>
                                <li>tableau</li>
                                <li>1895</li>
                                <li>Van Gogh</li>
                            </ul>
                            <p>Magnifique tableau de Van Gohg</p>
                        </div>
                        
                        <div class=" js-photo photo3">
                            <img src="images/nounours.jpg" alt="">
                            <h4> Nounours </h4>
                            <ul>
                                <li>tableau</li>
                                <li>1895</li>
                                <li>Van Gogh</li>
                            </ul>
                            <p>Magnifique tableau de Van Gohg</p>
                        </div>

                        <div class=" js-photo photo4 clone">
                            <img src="images/tableau.jpg" alt="">
                            <h4> Nuit étoilé - Van Gogh </h4>
                            <ul>
                                <li>tableau</li>
                                <li>1895</li>
                                <li>Van Gogh</li>
                            </ul>
                            <p>Magnifique tableau de Van Gohg</p>
                        </div>

                        <div class="js-photo photo1 clone">
                            <img src="images/pinguin.jpg" alt="">
                            <h4> Pinguin </h4>
                            <ul>
                                <li>tableau</li>
                                <li>1895</li>
                                <li>Van Gogh</li>
                            </ul>
                            <p>Magnifique tableau de Van Gohg</p>
                        </div>

                    </div>
                </div>
            </div>
                 <nav class="js-nav"> 
                    <button class="js-nav-left" ><img src="images/fleche.svg" alt="Voir l'image de gauche"> </button>
                    <button class="js-nav-right" ><img src="images/fleche.svg" alt="Voir l'image de gauche"> </button>
                </nav>
             
            <!-- <button> Tout voir </button> -->
            <!-- Afficher tout les jeux et afficher le bouton de filtre -->
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

        <div class="main-nav">
            <nav>
                <ul>
                    <li><a href="#top">Retour en haut</a></li>
                    <li><a href="atelier.php">Ateliers</a></li>
                    <li><a href="propos.php">À propos</a></li>
                </ul>
            </nav>
        </div>

        <hr>
        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non similique consectetur maxime dicta accusamus nobis sit, necessitatibus consequuntur cumque, culpa labore quos. Voluptas soluta similique rerum, veritatis excepturi culpa ut?</blockquote>

    </main>
    <!-- Footer -->
    <?php require "footer.php"; ?>

    

    <script src="script.js"></script>
</body>
</html>