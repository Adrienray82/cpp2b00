<?php
session_start();
include_once('./includes/dbConnect.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!--*HEAD*-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobMatch</title>
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

    <?php
        if(!empty($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
    ?>

    <!--PAGE-->
    <div class="pageback p-xs-0 p-sm-0 p-md-0 p-l-0 p-xl-5">
    <div class="titrepage">
            <h1 class="d-flex mx-3 mt-3 mb-5">Transformez chaque projet en succès !</h1>
        </div>
        <!-- Section cartes -->
        <div class="d-flex flex-wrap mb-5 col-12 justify-content-between">

            <div class="intro mx-3 col-md-12 col-lg-3 p-4">
                <p class="p4">Créée en 2024, JobMatch est une plateforme simplifiée de mise en relation entre :
                    Les freelances dans les domaines du développemment web et du graphisme
                    et des entreprises ou des particuliers qui ont besoin de leur service</p>
                <h4>Freelances ou demandeurs de projet, n'hésitez pas à vous inscrire !</h4>

            </div>
            <!-- carte freelance -->
            <div class="d-flex my-2 flex-column justify-content-center mx-3 col-md-12 col-lg-4">
                <div class="cartehaut">
                    <img class="photoblock" src="./media/photofreelance.jpg"><img>
                </div>
                <div class="cartebasfreelance px-3 pb-3">
                    <h2 class="title my-4">Freelance</h2>
                    <button><a href="./freelance_page_connexion.php">Connexion</a></button>

                    <button><a href="./freelance_page_inscription.php">Inscription</a></button>

                </div>
            </div>

            <!-- carte demandeur -->
            <div class="d-flex my-2 flex-column justify-content-center mx-3 col-md-12 col-lg-4">
                <div class="cartehaut">
                    <img class="photoblock" src="./media/photodemandeur.jpg"><img>
                </div>
                <div class="cartebasdemandeur px-3 pb-3">
                    <h2 class="title my-4">Demandeur de projet(s)</h2>
                    <button><a href="./demandeur_page_connexion.php">Connexion</a></button>

                    <button><a href="./demandeur_page_inscription.php">Inscription</a></button>

                </div>
            </div>

        </div>

    </div>

    <!-- Section annonces -->
    <div class="sectionannoncesindex d-flex flex-wrap col-12 p-xl-5">
        <div class="titrepage">
            <h2 class="d-flex mx-3 mt-3 mb-5">Dernière annonce parue</h2>
        </div>

        <!-- ANNONCE -->
        <div class="annonce col-12 px-5">

            <div class="annoncehaut d-flex justify-content-start">
                <p class="dateannonce">19/03/2024</p>
                <h3 class="annoncetitre px-3 d-flex align-items-center">Poste recherché</h3>
            </div>
            <div class="annonceiddem d-flex">
                <div class="photo"><img src="./media/photo03.png"><img></div>
                <h3 class="title4 ps-2 d-flex align-items-center">Nom du demandeur de projet</h3>
            </div>
            <div class="annoncedescriptif px-3">
                <p>Integer nibh libero, tincidunt a ultrices dignissim, pretium non mi. Praesent vitae aliquet turpis, quis faucibus leo. Praesent eleifend tortor eget velit aliquam, ut faucibus elit sagittis. Nullam nec sapien eget nisi pellentesque pellentesque sit amet at ex. Praesent lacus neque, condimentum at pretium nec, convallis a libero. Proin non metus aliquet, commodo risus in, ornare dolor. Morbi dictum nisi mi, vel convallis nibh convallis ac. Duis condimentum at turpis eu gravida.
                </p>
            </div>
            <div class="detailsmission d-flex flex-wrap justify-content-start align-items-center px-3">
                <div class="pe-5">
                    <p>Demarrage le : 01/01/2025</p>
                </div>
                <div class="pe-5">
                    <p>Durée : 5 mois</p>
                </div>
            </div>
            <div class="annoncebas d-flex justify-content-end align-items-center flex-wrap">
                <button class="about"><a href="annoncefiche.php">Détails</a></button>

            </div>
        </div>

    </div>

    <!-- Section freelances accueil -->
    <div class="pageback p-xs-0 p-sm-0 p-md-0 p-l-0 p-xl-5">
    <div class="titrepage">
         <h2 class="d-flex mx-3 mt-3 mb-5">Derniers freelances inscrits</h2>
      </div>

<!-- test boucle -->

<div class="sectionfreelances row px-xl-5">



<!-- VIGNETTES -->
<!-- TEST BOUCLE -->
<?php
$recupFree = $connect->prepare('SELECT * FROM freelance');
$recupFree->execute();
$recupFree = $recupFree->fetchAll();
?>


<?php
   if (count($recupFree) > 0) {

      for ($i = 0; count($recupFree) > $i ; $i++) {
      
         $id=$recupFree[$i]['id'];
         // echo($id);
         
         echo '
        
         <div class="vignettefree mb-5 p-3 col-sm-12 col-md-6 col-lg-4 ">

            <div class="vignettehaut d-flex align-items-start p-3">
               <div class="photofree d-flex me-3 align-items-start">
                  <img src="./media/photovidevignette.png">
               </div>
               <div class="d-flex flex-column">
                  <h4> ' . $recupFree[$i]['pseudo'] . ' </h4>
                  <div class="activity"><p> ' . $recupFree[$i]['job'] . '</p></div>
               </div>
            </div>
            <div class="photogrande">
               <img src="./media/photo01g.jpg"><img>
            </div>
            <div class="vignettebottom d-flex flex-column p-3">
            <p> ' . $recupFree[$i]['description'] . '</p>
               <div class="d-flex col-12 justify-content-start">

               <button class="about"><a href= "freelancefiche.php?id='.$id.'">Détails</a></button>
               </div>
            </div>
            <div class="barrecolors"></div>
         </div>
           ';
      }
   }
   ?>
</div>

        <div class="sectionfreelances d-flex flex-wrap col-12 px-xl-5">


    </div>
</div>
    
    <!--PIED DE PAGE-->
    <?php require('./includes/footer.php'); ?>

    <!--JS-->
    <script src="js/index.js"></script>
</body>


</html>