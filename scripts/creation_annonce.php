<?php
session_start();
require('../includes/dbConnect.php');

// verification du remplissage des champs
if(!empty($_POST['description'])) {
    // sécurisation input utilisateur
    $description = htmlspecialchars($_POST['description']);
    // mise à jour pseudo
    $query = $connect->prepare('UPDATE freelance SET description = ? WHERE id = ?');
    $query->execute([$description, $_SESSION['id']]);
    // mise à jour session
    $_SESSION['description'] = $description;
    // preparation message pour utilisateur
    $_SESSION['error'] = "<p class='text-success'>Votre déscription a bien été ajoutée.</p>";
    // redirection page profil
    header('Location: ../profil_free.php');
    exit();
} else {
    // erreur champ vide
    $_SESSION['error'] = "<p class='text-danger'>Le champ est vide.</p>";
    header('Location: ../profil_free.php');
    exit();
}
?>