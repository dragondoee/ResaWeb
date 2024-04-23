<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_detail.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Nom Atelier - Coffee Studio</title>
</head>
<body>

<!-- Header -->
<?php require "header.php"; ?>

<!-- Contenu -->
<?php require "connexion.php" ;
$id_atelier=$_GET["atelier"];
$requete="SELECT * FROM atelier WHERE id_atelier=$id_atelier";
$stmt=$db->query($requete);
$result=$stmt->fetchall(PDO::FETCH_ASSOC);
$atelier=$result
?>

<h1><?= $atelier["nom_atelier"] ?></h1>

<!-- Slider Images -->
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



<!-- Footer -->
<?php require "footer.php"; ?>

<script src="script.js"></script>
</body>
</html>