<?php
session_start();
require('../includes/dbConnect.php');

// verification du remplissage des champs
if(!empty($_POST['oldpass']) && !empty($_POST['newpass']) && !empty($_POST['newpass2'])) {
    // verification de la correspondace des nouveaux mots de passe
    if($_POST['newpass'] === $_POST['newpass2']) {
        // récupération de l'utilisatreur en BDD pour comparaison du mot de passe
        $query = $connect->prepare("SELECT * FROM freelance WHERE id= ?");
        $query->execute([$_SESSION['id']]);
        $freelance = $query->fetch();
        // verification ancien mot de passe
        $verif = password_verify($_POST['oldpass'], $freelance['pass']);
        if($verif ===true) {
            // cryptage MDP
            $pass = password_hash($_POST['newpass'], PASSWORD_BCRYPT);
            // mise à jour MDP si toutes les verifs sont bonnes
            $query = $connect->prepare("UPDATE freelance SET pass = ? WHERE id = ?");
            $query->execute([$pass, $_SESSION['id']]);
            // message pour user + retour profil.php
            $_SESSION['error'] = "<p class='text-success'>Mot de passe mis à jour.</p>";
            header('Location: ../profil_free.php');
            exit();
        } else {
            // erreur MDP incorrect
            $_SESSION['error'] = "<p class='text-danger'>Le mots de passe est incorrect.</p>";
            header('Location: ../profil_free.php');
            exit();
        }
    } else {
        // erreur MDP non identiques
        $_SESSION['error'] = "<p class='text-danger'>Les mots de passe ne sont pas identiques.</p>";
        header('Location: ../profil_free.php');
        exit();
    }
} else {
    // erreur champ vide
    $_SESSION['error'] = "Le champ est vide.";
    header('Location: ../profil_free.php');
    exit();
}