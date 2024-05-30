<?php
session_start();
include_once('./includes/dbConnect.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonce en detail</title>
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
            <h2 class="d-flex mx-3 mt-3 mb-5">À propos</h2>
        </div>
        <!-- SECTION ANNONCE -->
        <?php
        $ID = htmlspecialchars($_GET['id']);
      

         $query = $connect->prepare("SELECT * FROM freelance WHERE id = ?");
         $query->execute([$ID]);
         $recupOneFree = $query->fetch();
        

// echo($recupOneFree['pseudo']);
        //  $recupFree = $connect->prepare('SELECT * FROM freelance');
        //  $recupFree->execute();
        //  $recupFree = $recupFree->fetchAll();
         
        ?>
        <div class="sectionannonces d-flex flex-wrap col-12 p-xl-5">


            <!-- recherche -->
            <!-- <div class="rech d-flex mb-5 px-4 py-2 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 col-xl-8">
            <div class="rechfree d-flex flex-column p-5">
            <div class="icones d-flex">
               <img src="./media/devico.png">
               <img src="./media/graphico.png">
            </div>
            <h3 class="title3 d-flex justify-content-center">Trouver les talents</h3>
            
            <p class="p3">Découvrez des talents créatifs !<br> Développeurs web et Graphistes sont à votre disposition pour concrétiser vos projets avec expertise et originalité !</p>

            </div>
         </div> -->

            <!-- ANNONCES -->

            <!-- ANNONCE -->
            <div class="annonce col-12">

                <div class="annoncehaut d-flex justify-content-start">
                </div>

                <div class="annonceiddem d-flex">
                    <div class="photo"><img src="./media/photo01.png"><img></div>
                    <h3 class="ps-2 d-flex align-items-center"><?php echo($recupOneFree['pseudo']) ?></h3>
                </div>
                <div class="detailsfreelance d-flex flex-wrap justify-content-start align-items-center px-3">
                    <div class="pe-5">
                    <p class="activity"><?php echo($recupOneFree['job']) ?></p>
                    </div>
                    <div class="pe-5">
                        <p>Expérience : 5 ans</p>
                    </div>
                    <div class="pe-5">
                        <p> Tarif : <b>€€</b></p>
                    </div>
                    <div class="pe-5">
                        <p> Note : 5/5</p>
                    </div>
                </div>
                <div class="texteetimage d-md-flex align-items-start px-3 pt-5 pb-2">
                <div class="imagaccroche col-xl-4 mb-5 "><img src="./media/photo01bg.jpg"><img></div>    
                <div class="freelancedescriptif px-3">
                <?php echo ($recupOneFree['description']) ; ?>
                    <div class="liensfreelance d-flex justify-content-center mt-5">
                    <button class="about mx-1"><a href="">Lien</a></button>
                    <button class="about mx-1"><a href="">Consulter le CV</a></button>
                </div>
                </div>
                </div>

                <!-- CRUD CONTACT FREELANCE -->

                <div class="contactfreelance p-5">
                    <h3 class="ps-2 d-flex align-items-center">Contacter ce freelance</h3>
                    <form action="./scripts/contacter_free.php" method="POST">


                        <div>
                            <label for="document">Poster une piece jointe :</label>
                            <input type="file" name="cv" id="cv">
                        </div>
                        <div class="messagecandidature d-flex flex-column">
                            <label for="textecandidature">Message :</label>
                            <textarea id="textecandidature" name="textecandidature" rows="5" cols="33">
                  </textarea>
                        </div>


                        <div class="spacer"></div>
                        <button type="submit">Valider</button>
                    </form>

                    <div class="spacer"></div>
                    <button class="about"><a href="annonces.php">Retour annonces</a></button>
                    <div class="spacer"></div>
                </div>


                <div class="annoncebas d-flex justify-content-end align-items-center flex-wrap">

                </div>
            </div>


        </div>
    </div>
    <!--PIED DE PAGE-->
    <?php require('./includes/footer.php'); ?>

    <!--JS-->
    <script src="js/index.js"></script>
</body>

</html>