<?php
session_start();
require('../includes/dbConnect.php');

// verification du remplissage des champs
if(!empty($_POST['mail'])) {
    // sécurisation input utilisateur
    $mail = htmlspecialchars($_POST['mail']);
    // mise à jour mail
    $query = $connect->prepare("UPDATE demandeur SET mail = ? WHERE id = ?");
    $query->execute([$mail, $_SESSION['id']]);
    // mise à jour session
    $_SESSION['mail'] = $mail;
    // preparation message pour utilisateur
    $_SESSION['error'] = "<p class='text-success'>Le mail a bien été modifié.</p>";
    // redirection page profil
    header('Location: ../profil_demandeur.php');
    exit();
} else {
    // erreur champ vide
    $_SESSION['error'] = "<p class='text-danger'>Le champ est vide.</p>";
    header('Location: ../profil_demandeur.php');
    exit();
}