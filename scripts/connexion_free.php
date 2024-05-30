<?php
// Obligatoire si on veut utiliser les variables de sessions
session_start();
require('../includes/dbConnect.php');

if(!empty($_POST['mail2']) && !empty($_POST['pass3'])) {
   $mail = htmlspecialchars($_POST['mail2']);
   // Rechercher dans la BDD si l'utilisateur y existe
   $query = $connect->prepare("SELECT * FROM freelance WHERE mail = ?");
   $query->execute([$mail]);
   $freelance = $query->fetch();
   // Si l'utilisateur existe
   if($freelance !== true) {
      // On verifie que le mot de passe correspond
      $verif = password_verify($_POST['pass3'], $freelance['pass']);
      // Si c'est OK
      if($verif) {
         // On rentre les infos dans $session + retour à l'accueil
         $_SESSION['id'] = $freelance['id'];
         $_SESSION['mail'] = $freelance['mail'];
         $_SESSION['pseudo'] = $freelance['pseudo'];
         $_SESSION['job'] = $freelance['job'];
         $_SESSION['description'] = $freelance['description'];
         header('location: ../freelance_page_connexion.php');
         exit();
      } else {
         // Erreur MDP
         $_SESSION['error'] = "<p class='text-danger'>Le mot de pass est incorrect.</p>";
         header('Location: ../index.php');
         exit();
      }
   } else {
      // Erreur utilisateur inexistant
      $_SESSION['error'] = "<p class='text-danger'>L'identifiant est incorrect.</p>";
      header('Location: ../index.php');
      exit();
   }
} else {
   // Erreur champ vide
   $_SESSION['error'] = "<p class='text-danger'>Un des champs est vide.</p>";
   header('Location: ../index.php');
   exit();
}