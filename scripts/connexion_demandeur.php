<?php
// Obligatoire si on veut utiliser les variables de sessions
session_start();
require('../includes/dbConnect.php');

if(!empty($_POST['mail2']) && !empty($_POST['pass3'])) {
   $mail = htmlspecialchars($_POST['mail2']);
   $mdpSaisie = $_POST['pass3'];
   // Rechercher dans la BDD si l'utilisateur y existe
   $query = $connect->prepare("SELECT * FROM demandeur WHERE mail = ?");
   $query->execute([$mail]);
   $demandeur = $query->fetch();
   $mdpBdd = $demandeur['pass'];
   // Si l'utilisateur existe
    if($demandeur !== true) {
      // On verifie que le mot de passe correspond
      $verif = password_verify($mdpSaisie, $mdpBdd);
      
      echo($verif);
      // Si c'est OK
      if($verif ==!true) {
         // On rentre les infos dans $session + retour à l'accueil
         $_SESSION['id'] = $demandeur['id'];
         $_SESSION['mail'] = $demandeur['mail'];
         $_SESSION['pseudo'] = $demandeur['pseudo'];
         $_SESSION['description'] = $demandeur['description'];
         header('location: ../profil_demandeur.php');
         exit();

      } else {
         // Erreur MDP
         $_SESSION['error'] = "<p class='text-danger'>Le mot de pass est incorrect.</p>";
         header('Location: ../index.php');
         exit();
      }
   }
    else {
      // Erreur utilisateur inexistant
      $_SESSION['error'] = "<p class='text-danger'>L'identifiant est incorrect.</p>";
      header('Location: ../index.php');
      exit();
   }
} 
else {
   // Erreur champ vide
   $_SESSION['error'] = "<p class='text-danger'>Un des champs est vide.</p>";
   header('Location: ../index.php');
   exit();
}