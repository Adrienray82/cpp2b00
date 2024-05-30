<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Annonces</title>
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
         <h2 class="d-flex mx-3 mt-3 mb-5">Annonces</h2>
      </div>
      <!-- SECTION ANNONCES -->
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


         <!-- ANNONCE -->
         <div class="annonce col-12">

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

         
         <!-- ANNONCE -->
         <div class="annonce col-12">

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
   </div>


   </div>
   <!--PIED DE PAGE-->
   <?php require('./includes/footer.php'); ?>

   <!--JS-->
   <script src="js/index.js"></script>
</body>

</html>