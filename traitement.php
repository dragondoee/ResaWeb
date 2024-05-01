<?php
// Ajouter les informations à la base de données




// Récupération des données du formulaire
$email = $_GET['mail'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];

// Configuration de l'e-mail
$destinataire = $email;
$sujet = "Confirmation de réservation - Quest & Coffee";
$message = "Votre réservation a été confirmée.";

mail($destinataire, $sujet, $message);
// Redirection vers une page de confirmation
header("Location: confirmation.php");
exit;



?>
