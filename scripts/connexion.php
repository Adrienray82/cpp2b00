<?php
// Obligatoire si on veut utiliser les variables de sessions
session_start();
require('../includes/dbConnect.php');

if(!empty($_POST['mail2']) && !empty($_POST['pass3'])) {
   $mail = htmlspecialchars($_POST['mail2']);
   // Rechercher dans la BDD si l'utilisateur y existe
   $query = $connect->prepare("SELECT * FROM user WHERE mail = ?");
   $query->execute([$mail]);
   $user = $query->fetch();
   // Si l'utilisateur existe
   if($user !== false) {
      // On verifie que le mot de passe correspond
      $verif = password_verify($_POST['pass3'], $user['pass']);
      // Si c'est OK
      if($verif === true) {
         // On rentre les infos dans $session + retour à l'accueil
         $_SESSION['id'] = $user['id'];
         $_SESSION['mail'] = $user['mail'];
         $_SESSION['pseudo'] = $user['pseudo'];
         header('location: ../index.php');
         exit();
      } else {
         // Erreur MDP
         $_SESSION['error'] = "<p class='text-danger'>Le mot de passe est incorrect.</p>";
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