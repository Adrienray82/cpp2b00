<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="styles/style.css" />
    <!--Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!--*BODY*-->

    <!--EN-TÊTE-->
    <?php require('./includes/header.php')
    ?>

    <!--PAGE-->
    <div class="pageback px-sm-1 px-xl-4 py-5">
        <div class="titrepage">
            <h2 class="d-flex mx-3 mt-3">Profil</h2>
            <div class="d-flex align-items-start mx-3 mb-5">
                <span class="material-symbols-outlined">arrow_back</span>
                <a href="./index.php">Retour à l'accueil</a>
            </div>
        </div>


        <!-- PERSONNALISATION PROFIL -->
        <div class="m-auto col-lg-12 row">
            <!-- haut -->
            <div class="boxblue d-flex align-items-end justify-content-between m-auto p-4 col-lg-8">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <img src="./media/photovide.png">
                    </div>
                    <?php
                    echo "<h2>" . $_SESSION['pseudo'] . "</h2>";
                    ?>
                </div>
                <div class="spacer"></div>
                <?php
                echo "<p> <b>email : </b>" . $_SESSION['mail'] . "</p>";
                ?>

            </div>
            <!-- Creer annonce -->
            <div class="boxwhite align-items-start m-auto p-4 col-lg-8">
                <h2>Créez une nouvelle annonce</h2>
                <form action="./scripts/modifProfil_free.php" method="post">
                <div>
                            <label class="form-label" for="title">Titre :</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>
                        <p class="mt-4">Description de l'annonce :</p>
                         <textarea class="form-control" rows="5" name="description">
                        <?php
                        if (!empty($_SESSION['annoncetext'])) {
                            echo $_SESSION['annoncetext'];
                        } else {
                            echo 'Rédiger votre nouvelle annonce, vous pouvez aussi y ajouter une description vous concernant ainsi que la date de la mission. ';
                        } ?>
                        </textarea>


                    <button class="d-flex align-items-end" type="submit">Valider</button>
                </form>

            </div>
        </div>
        <div class="spacer"></div>
        <!-- MODIFIER COMPTE -->
        <div class="boxwhite d-flex flex-column align-items-start m-auto p-4 col-lg-8">
            <?php
            // redireaction à la page d'accueil si l'utilisateur n'est pas connecté
            if (empty($_SESSION['id'])) {
                $_SESSION['error'] = "Vous devez d'abord vous connecter.";
                header('Location: ./index.php');
                exit();
            }
            ?>

            <?php
            // affichage d'un message d'erreur stocké dans la session (un des seuls moyens de faire communiquer des fichiers entre eux)
            if (!empty($_SESSION['error'])) {
                echo $_SESSION['error'];
                // on vide la variable de session pour ne pas causer de conflits entre les messages d'erreur
                $_SESSION['error'] = "";
            }
            ?>
            <h2>Modifier mon compte</h2>
            <div class="spacer"></div>
            <div class="spacer"></div>
            <div class="row w-100">
                <div class="col-md-6 col-12 mb-5">
                    <form action="./scripts/modifMail_demandeur.php" method="post">
                        <label class="form-label" for="mail">Nouveau mail</label>
                        <input class="form-control" type="email" name="mail" id="mail">
                        <button type="submit">Modifier Mail</button>
                    </form>
                </div>
                <div class="col-md-6 col-12 mb-5">
                    <form action="./scripts/modifPseudo_demandeur.php" method="post">
                        <label class="form-label" for="pseudo">Nouveau pseudo</label>
                        <input class="form-control" type="text" name="pseudo" id="pseudo">
                        <button type="submit">Modifier Pseudo</button>
                    </form>
                </div>

            </div>
            <form action="./scripts/modifMDP_demandeur.php" method="post">
                <div class="row mb-5">
                    <div class="col-md-3 col-12">
                        <label class="form-label" for="oldpass">Actuel mdp</label>
                        <input class="form-control" type="password" name="oldpass" id="oldpass">
                    </div>
                    <div class="col-md-3 col-12">
                        <label class="form-label" for="newpass">Nouveau mdp</label>
                        <input class="form-control" class="form-control" type="password" name="newpass" id="newpass">
                    </div>
                    <div class="col-md-3 col-12">
                        <label class="form-label" for="newpass2">Confirmation</label>
                        <input class="form-control" type="password" name="newpass2" id="newpass2">
                    </div>
                    <div class="col-md-3 col-12 mt-md-4 mt-0">
                        <button type="submit">Modifier MDP</button>
                    </div>
                </div>
            </form>
            <div class="d-flex">
                <span class="material-symbols-outlined">
                    cancel</span>
                <a href="./scripts/supprrCompte_demandeur.php">Supprimer mon compte</a>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php require('./includes/footer.php') ?>

    <!--JS-->
    <script src="js/index.js"></script>

</body>

</html>