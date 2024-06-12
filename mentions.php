<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-mentions.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Mentions légales - Quest & Coffee</title>
</head>

<body>
    <!-- Header -->
    <?php require "header.php"; ?>

    <!-- Main -->
    <h1 id="content">Mentions Légales</h1>
    <main>



        <nav>
            <h2>Sommaire : </h2>
            <a href="#editeur">1.Éditeur du site</a>
            <a href="#hebergeur">2.Hébergeur</a>
            <a href="#contenu">3.Images et contenu</a>
            <a href="#donnee">4.Utilisation et protection des données personnelles</a>
        </nav>

        <section>
            <div>
                <h3 id="editeur">1.Éditeur du site</h3>
                <p>
                    Nom : Emilie Desgranges <br>
                    Étudiante en 1ère année de BUT Métier du Multimédia et de l'Internet à Champs-sur-Marne.
                </p>
            </div>
            <div>
                <h3 id="hebergeur">2.Hébergeur</h3>
                <p>
                    <a href="o2switch.fr" target="_blank">o2switch.fr</a> - 222-224 Boulevard Gustave Flaubert - 63000
                    Clermont-Ferrand, France
                </p>
            </div>
            <div>
                <h3 id="contenu">3.Images et contenu</h3>
                <p> Les logos ont été créé avec Figma par Emilie Desgranges. <br>
                    Les images des salles ont été généré avec <a href="https://www.adobe.com/fr/products/firefly.html" target="_blank">Adobe FireFly</a>. <br>
                    La mascotte a été réalisé à l'aide de <a href="https://www.canva.com" target="_blank">Canva</a>.
                    <br>
                    Les images des boissons proviennent de la banque de photos <a href="https://unsplash.com/fr"
                        target="_blank">Unsplash</a>. <br>
                    Certains textes ont été rédigés ou partiellement rédigés avec l’aide d’intelligence artificielle.
                </p>
            </div>
            <div>
                <h3 id="donnee">4.Utilisation et protection des données personnelles</h3>
                <p>Responsable du traitement : Emilie Desgranges (<a href="mailto:emilie.desgranges@edu.univ-eiffel.fr"
                        target="_blank">emilie.desgranges@edu.univ-eiffel.fr</a>)
                    <br><br>
                    En appuyant sur envoyer, vous donnez votre consentement à envoyer les données du formulaire. Vos
                    données personnelles ( adresse mail, nom et prénom) sont récupérées dans le cadre d’un projet
                    scolaire, elles ne seront jamais transmises à des tiers et ne feront jamais l’objet d'une
                    commercialisation.
                    <br><br>
                    Les données seront conservées dans les serveurs d’o2switch. Vous avez les droits d’accès, de
                    rectification, d’effacement et à la limitation concernant vos données personnelles.
                    <br><br>
                    Pour toutes questions ou actions, vous pouvez contacter le responsable du traitement des données.
                    <br><br>
                    Pour en savoir plus sur vos droits concernant vos données :
                    <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees"
                        target="_blank">https://www.cnil.fr/fr/reglement-europeen-protection-donnees</a>
                </p>
            </div>

        </section>


    </main>

    <!-- Footer -->
    <?php require "footer.php"; ?>

</body>

</html>