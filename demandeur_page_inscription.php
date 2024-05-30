<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Freelances</title>
   <!--BOOTSTRAP-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!--CSS-->
   <link rel="stylesheet" href="styles/style.css" />
   <!--Fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
   <!--*BODY*-->

   <!--EN-TÊTE-->
   <?php require('./includes/header.php') ?>
   <!--PAGE-->
   <div class="pageback p-xs-0 p-sm-0 p-md-0 p-l-0 p-xl-5">
      <div class="titrepage">
         <h2 class="d-flex mx-3 mt-3 mb-5">Inscription demandeur de projet</h2>
      </div>
      <!-- SECTION FREELANCES -->
      <div class="sectionfreelances d-flex flex-wrap col-12 px-xl-5">



         <div class="boxwhite d-flex flex-column align-items-center justify-content-center col-12">
                <div class="photocrud my-4">
                    <img src="./media/photodemandeur.jpg"><img>
                </div>
                <?php
                if (empty($_SESSION['id'])) {
                ?>
                    <div class="inscription">
                        <form action="./scripts/inscription_demandeur.php" method="POST">

                            <div>
                                <label for="pseudo">Nom sur le site (ex: pseudonyme, nom de votre société) :</label>
                                <input type="text" name="pseudo" id="pseudo">
                            </div>
                            <div>
                                <label for="first_name">Prénom :</label>
                                <input type="text" name="first_name" id="first_name">
                            </div>
                            <div>
                                <label for="last_name">Nom :</label>
                                <input type="text" name="last_name" id="last_name">
                            </div>
                            <div>
                                <label for="mail">e-mail : </label>
                                <input type="email" name="mail" id="mail">
                            </div>
                            <div>
                                <label for="pass">Mot de passe : </label>
                                <input type="password" name="pass" id="pass">
                            </div>
                            <div>
                                <label for="pass2">Confirmez le mot de passe : </label>
                                <input type="password" name="pass2" id="pass2">
                            </div>
                            <div class="spacer"></div>
                            <button type="submit">Valider</button>
                        </form>

                        <div class="spacer"></div>

                        <p class="note">Déjà inscrit ?</p>
                        <a href="./demandeur_page_connexion.php">Je souhaite me connecter</a>
                      
                    </div>
                    <?php
                } else {
                    echo "<p>Bonjour, " . $_SESSION['pseudo'] . " !</p>";
                    echo "<a href='./profil_demandeur.php'>Modifier le profil</a>";
                    echo "<a href='./scripts/deconnexion.php'>Déconnexion</a>";
                }
                ?>
                </div>




      </div>
   </div>
   <!--PIED DE PAGE-->
   <?php require('./includes/footer.php'); ?>

   <!--JS-->
   <script src="js/index.js"></script>
</body>

</html>