<?php
// * Récupération des données du formulaire
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$email = $_GET['mail'];

$salle = $_GET['salle'];
$date = $_GET['date'];
$horaire = $_GET['horaire'];
$duree = $_GET['duree'];
$participant = $_GET['participant'];



// * Ajouter les informations de l'user dans la bdd
// * Test l'existance de l'user dans la bdd
require "connexion.php";
$sql_check = "SELECT id_user FROM user WHERE mail_user = '$email';";
$stmt_check = $db->query($sql_check);
$result_check = $stmt_check->fetchall(PDO::FETCH_ASSOC);
// print_r($result_check);

if (empty($result_check)) {
    // * Si l'email n'existe pas, insérer le nouvel utilisateur
    $requeteUser = "INSERT INTO user VALUES (NULL, '$nom', '$prenom', '$email' );";
    echo "User ajouté dans la bdd, ";
    $stmt = $db->query($requeteUser);
} else {
    echo "User pas ajouté dans la bdd, ";
}

// * Récupère l'id de l'user

$sql_IdUser = "SELECT id_user FROM user WHERE mail_user = '$email';";
$stmt_IdUser = $db->query($sql_IdUser);
$result_IdUser = $stmt_IdUser->fetch(PDO::FETCH_ASSOC);

// print_r($result_IdUser) ;
if (empty($result_IdUser)) {
    echo "Pas d'id trouvé";
} else {
    // echo "id trouvé : ";
    // echo $result_IdUser["id_user"].", ";
}

// * Ajouter les informations de réservation dans la bdd
// *Test l'existance de la réservation dans la bdd

$sql_check_Resa = "SELECT * FROM reservation WHERE responsable={$result_IdUser['id_user']} AND date_resa='$date' AND horaire='$horaire' AND salle=$salle;";
$stmt_check_Resa = $db->query($sql_check_Resa);
$result_check_Resa = $stmt_check_Resa->fetchall(PDO::FETCH_ASSOC);
// print_r($result_check_Resa).", ";

if (empty($result_check_Resa)) {
    // * Si la réservation n'existe pas, insérer la nouvelle réservation 
    $requeteResa = "INSERT INTO reservation VALUES (NULL, {$result_IdUser['id_user']} , '$date' , '$horaire', '$duree' , $participant , $salle ) ";
    $stmt = $db->query($requeteResa);
    echo "Resa ajouté dans la bdd";
} else {
    echo "Resa pas ajouté dans la bdd, ";
}

// * Récupère l'id de la réservation

$sql_IdResa = "SELECT id_resa FROM reservation WHERE responsable={$result_IdUser['id_user']} AND date_resa='$date';";
$stmt_IdResa = $db->query($sql_IdResa);
$result_IdResa = $stmt_IdResa->fetch(PDO::FETCH_ASSOC);

// print_r($result_IdResa) ;
if (empty($result_IdResa)) {
    echo "Pas d'id trouvé";
} else {
    echo "id trouvé  ";
    // echo $result_IdResa["id_resa"].", ";
}

// * Information boisson

$boisson= $_GET["boisson"];
$quantite= $_GET["quantite"];

// * Ajouter les informations de la commande dans la bdd
$requeteCommande = "INSERT INTO commande VALUES (NULL, {$result_IdUser['id_user']} , $boisson , {$result_IdResa['id_resa']}, $quantite) ";
$stmt = $db->query($requeteCommande);





// ! MAIL


// * Configuration de l'e-mail pour l'utilisateur qui a réservé
$sujet = "Confirmation de réservation - Quest & Coffee";
$message = "Votre réservation a été confirmée. On se voit plus tard $prenom";

// * Mail pour l'utilisateur qui a réservé
mail($email, $sujet, $message);

// * Configuration de l'e-mail pour le gestionnaire
$sujetG = "Notification de réservation - Quest & Coffee";
$messageG = "$prenom $nom a réserver la salle $salle le $date pour $participant personne.s., Contact responsable: $email";

// * Mail pour le gestionnaire
// mail('emilie.desgranges78@gmail.com', $sujetG, $messageG);


// * Redirection vers une page de confirmation
// header("Location: confirmation.php");
exit;

// Voir le cours pour sécuriser le code des injections SQL
// Prepare, bind, execute