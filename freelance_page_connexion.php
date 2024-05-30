<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion freelance</title>
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
            <h2 class="d-flex col-12 justify-content-center  mt-3 mb-5">Connexion freelance</h2>
        </div>
        <!-- SECTION FREELANCES -->
        <div class="section d-flex justify-content-center col-12 px-xl-5">



            <div class="boxpurple d-flex flex-column align-items-center justify-content-center col-sm-12 col-md-12 col-lg-4">
                <?php
                if (empty($_SESSION['id'])) {
                ?>

                    <!-- CRUD Connexion freelance -->
                    <div class="connexion my-4">
                    <form action="./scripts/connexion_free.php" method="POST">
                        <div>
                            <label for="mail2">e-mail : </label>
                            <input type="email" id="mail2" name="mail2">
                        </div>
                        <div>
                            <label for="pass3">Mot de passe : </label>
                            <input type="password" id="pass3" name="pass3">
                        </div>
                        <button type="submit">Valider</button>
                    </form>
                    <div class="spacer"></div>
                    <p class="note">Pas encore inscrit ?</p>
                        <a href="./freelance_page_inscription.php">Je souhaite m'inscrire</a>
                </div>

                </div>

            <?php 
                } else {
                require_once"./includes/accueilfreelance.php";
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