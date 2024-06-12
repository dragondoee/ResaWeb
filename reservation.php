<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-resa.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Itim&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Réservation - Quest & Coffee</title>
</head>

<body>
    <!-- Header -->
    <?php require "header.php"; ?>

    <!-- Formulaire -->
    <main>
        <form action="traitement.php">
            <div class="slider">
                <div class="slider-content">
                    <fieldset>
                        <legend id="content">Réservation</legend>
                        <p>Tous les champs sont obligatoires</p>
                        <!-- Nom -->
                        <p>
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" required placeholder="Nom">
                        </p>
                        
                        <!-- Prénom -->
                        <p>
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" required placeholder="Prénom">
                        </p>
                        
                        <!-- Adresse mail -->
                        <p>
                            <label for="mail">Adresse mail</label>
                            <input type="email" id="mail" name="mail" required placeholder="exemple@mail.com">
                        </p>
                        
                        <input type="button" class="button-next userButton button-style small-button" value="Suivant">
                    </fieldset>
                    <!-- ------------------------------------------------------------------- -->
                    <fieldset>
                    <?php $salleID = isset($_GET['salle']) ? $_GET['salle'] : ''; ?>
                        <legend>Réservation d'une table</legend>
                        <p>Tous les champs sont obligatoires</p>
                        <!-- Salle -->
                        <p>
                            <label for="salle">Salle</label>
                            <select name="salle" id="salle">
                                <option value="" >Choisir une salle</option>
                                <?php require "connexion.php";
                                $requete = "SELECT * FROM salle ORDER BY nom_salle ASC;";
                                $stmt = $db->query($requete);
                                $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                                foreach ($result as $salle) {
                                    ?>
                                    <option value="<?= $salle["id_salle"]; ?>" <?php echo ($salleID == $salle["id_salle"]) ?'selected' : ''; ?>><?= $salle["nom_salle"]; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </p>
                        
                        <!-- Date -->
                        <p>
                            <label for="date">Date</label>
                            <input type="date" min="<?= date('Y-m-d') ?>" id="date" name="date" required>
                        </p>
                       
                        <!-- Horaire -->
                        <p>
                            <label for="horaire">Horaire</label>
                            <select name="horaire" id="horaire">
                                <option value="">Choisir un horaire</option>
                                <option value="009:00:00">9h00</option>
                                <option value="010:00:00">10h00</option>
                                <option value="011:00:00">11h00</option>
                                <option value="012:00:00">12h00</option>
                                <option value="013:00:00">13h00</option>
                                <option value="014:00:00">14h00</option>
                                <option value="015:00:00">15h00</option>
                                <option value="016:00:00">16h00</option>
                                <option value="017:00:00">17h00</option>
                                <option value="018:00:00">18h00</option>
                            </select>
                        </p>
                        
                        <!-- Durée -->
                        <p>
                            <label for="duree">Durée</label>
                            <select name="duree" id="duree">
                                <option value="">Choisir une durée</option>
                                <option value="01:00:00">1h</option>
                                <option value="02:00:00">2h</option>
                            </select>
                        </p>
                       
                        <!-- Participant -->
                        <p>
                            <label for="participant">Nombre de personne</label>
                            <input type="number" min="1" max="10" id="participant" name="participant" required>
                        </p>
                        
                        <span>
                            <input type="button" class="button-before button-style small-button" value="Précédent">
                            <input type="button" class="button-next resaButton button-style small-button" value="Suivant">
                        </span>
                    </fieldset>
                    <!-- ------------------------------------------------------------------- -->
                    <fieldset class="form-boisson">
                        <legend>Commander des boissons</legend>
                        <p>Les champs sont facultatifs</p>
                        
                        <div id="boissons">
                            <div class="boisson">
                                <label> <span class="sr-only">Boisson</span>
                                    <select name="boisson[]" class="choixBoisson">
                                        <option value="">Choisir une boisson</option>
                                        <?php require "connexion.php";
                                        $requete = "SELECT * FROM boisson ORDER BY nom_boisson ASC;";
                                        $stmt = $db->query($requete);
                                        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                                        foreach ($result as $boisson) {
                                            ?>
                                            <option value="<?= $boisson["id_boisson"]; ?>"><?= $boisson["nom_boisson"]; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </label>
                                <label> Quantité <input type="number" min="1" max="10" name="quantite[]" class="quantite">  </label>
                            </div>
                        </div>
                        <button type="button" class="add-drink button-style small-button">Ajouter une boisson</button>
                       
                        <span>
                            <input type="button" class="button-before button-style small-button" value="Précédent">
                            <input type="button" class="button-next drinkButton button-style small-button" value="Suivant">
                        </span>
                    </fieldset>
                    <!-- ------------------------------------------------------------------- -->
                    <fieldset class="recap">
                        
                    </fieldset>
                    <!-- ------------------------------------------------------------------- -->
                </div>
            </div>
        </form>


    </main>

    <!-- Footer -->
    <?php require "footer.php"; ?>


    <script src="form-script.js"></script>
</body>

</html>