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
         <h2 class="d-flex mx-3 mt-3 mb-5">Freelances inscrits</h2>
      </div>
      <!-- SECTION FREELANCES -->
      <div class="sectionfreelances d-flex flex-wrap col-12 px-xl-5">


         <!-- recherche -->
         <div class="rech d-flex mb-5 px-4 py-2 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 col-xl-8">
            <div class="rechfree d-flex flex-column p-5">
               <div class="icones d-flex">
                  <img src="./media/devico.png">
                  <img src="./media/graphico.png">
               </div>
               <h3 class="title3 d-flex justify-content-center">Trouver les talents</h3>

               <p class="p3">Découvrez des talents créatifs !<br> Développeurs web et Graphistes sont à votre disposition pour concrétiser vos projets avec expertise et originalité !</p>

            </div>
         </div>

         <!-- VIGNETTES -->

         <!-- VIGNETTE -->
         <div class="vignettefree mb-5 p-3 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 ">

            <div class="vignettehaut d-flex align-items-start p-3">
               <div class="photofree d-flex me-3 align-items-start">
                  <img src="./media/photo01.png">
               </div>
               <div class="d-flex flex-column">
                  <h3>Mila Coding</h3>
                  <p class="activity">Développeur</p>
               </div>
            </div>
            <div class="photogrande">
               <img src="./media/photo01g.jpg"><img>
            </div>
            <div class="vignettebottom d-flex flex-column p-3">
               <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, omnis. Molestias ratione et rerum doloribus quis! Ut quasi illo, quas provident sint quibusdam. Cupiditate perferendis, nihil unde ratione delectus sequi.</p>
               <div class="d-flex col-12 justify-content-start"><button class="about"><a href="freelancefiche.php">Détails</a></button></div>
            </div>
            <div class="barrecolors"></div>
         </div>

         <!-- VIGNETTE -->
         <div class="vignettefree mb-5 p-3 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 ">

            <div class="vignettehaut d-flex align-items-start p-3">
               <div class="photofree d-flex me-3 align-items-start">
                  <img src="./media/photo01.png">
               </div>
               <div class="d-flex flex-column">
                  <h3>Mila Coding</h3>
                  <p class="activity">Développeur</p>
               </div>
            </div>
            <div class="photogrande">
               <img src="./media/photo01g.jpg"><img>
            </div>
            <div class="vignettebottom d-flex flex-column p-3">
               <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, omnis. Molestias ratione et rerum doloribus quis! Ut quasi illo, quas provident sint quibusdam. Cupiditate perferendis, nihil unde ratione delectus sequi.</p>
               <div class="d-flex col-12 justify-content-start"><button class="about"><a href="freelancefiche.php">Détails</a></button></div>
            </div>
            <div class="barrecolors"></div>
         </div>

         <!-- VIGNETTE -->
         <div class="vignettefree mb-5 p-3 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 ">

            <div class="vignettehaut d-flex align-items-start p-3">
               <div class="photofree d-flex me-3 align-items-start">
                  <img src="./media/photo01.png">
               </div>
               <div class="d-flex flex-column">
                  <h3>Mila Coding</h3>
                  <p class="activity">Développeur</p>
               </div>
            </div>
            <div class="photogrande">
               <img src="./media/photo01g.jpg"><img>
            </div>
            <div class="vignettebottom d-flex flex-column p-3">
               <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, omnis. Molestias ratione et rerum doloribus quis! Ut quasi illo, quas provident sint quibusdam. Cupiditate perferendis, nihil unde ratione delectus sequi.</p>
               <div class="d-flex col-12 justify-content-start"><button class="about"><a href="freelancefiche.php">Détails</a></button></div>
            </div>
            <div class="barrecolors"></div>
         </div>
         <!-- VIGNETTE -->
         <div class="vignettefree mb-5 p-3 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 ">

            <div class="vignettehaut d-flex align-items-start p-3">
               <div class="photofree d-flex me-3 align-items-start">
                  <img src="./media/photo01.png">
               </div>
               <div class="d-flex flex-column">
                  <h3>Mila Coding</h3>
                  <p class="activity">Développeur</p>
               </div>
            </div>
            <div class="photogrande">
               <img src="./media/photo01g.jpg"><img>
            </div>
            <div class="vignettebottom d-flex flex-column p-3">
               <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, omnis. Molestias ratione et rerum doloribus quis! Ut quasi illo, quas provident sint quibusdam. Cupiditate perferendis, nihil unde ratione delectus sequi.</p>
               <div class="d-flex col-12 justify-content-start"><button class="about"><a href="freelancefiche.php">Détails</a></button></div>
            </div>
            <div class="barrecolors"></div>
         </div>

         <!-- VIGNETTE -->
         <div class="vignettefree mb-5 p-3 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 ">

            <div class="vignettehaut d-flex align-items-start p-3">
               <div class="photofree d-flex me-3 align-items-start">
                  <img src="./media/photo01.png">
               </div>
               <div class="d-flex flex-column">
                  <h3>Mila Coding</h3>
                  <p class="activity">Développeur</p>
               </div>
            </div>
            <div class="photogrande">
               <img src="./media/photo01g.jpg"><img>
            </div>
            <div class="vignettebottom d-flex flex-column p-3">
               <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, omnis. Molestias ratione et rerum doloribus quis! Ut quasi illo, quas provident sint quibusdam. Cupiditate perferendis, nihil unde ratione delectus sequi.</p>
               <div class="d-flex col-12 justify-content-start"><button class="about"><a href="freelancefiche.php">Détails</a></button></div>
            </div>
            <div class="barrecolors"></div>
         </div>

         <!-- VIGNETTE -->
         <div class="vignettefree mb-5 p-3 col-xs-12 col-s-6 col-sm-6 col-md-6 col-lg-4 ">

            <div class="vignettehaut d-flex align-items-start p-3">
               <div class="photofree d-flex me-3 align-items-start">
                  <img src="./media/photo01.png">
               </div>
               <div class="d-flex flex-column">
                  <h3>Mila Coding</h3>
                  <p class="activity">Développeur</p>
               </div>
            </div>
            <div class="photogrande">
               <img src="./media/photo01g.jpg"><img>
            </div>
            <div class="vignettebottom d-flex flex-column p-3">
               <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, omnis. Molestias ratione et rerum doloribus quis! Ut quasi illo, quas provident sint quibusdam. Cupiditate perferendis, nihil unde ratione delectus sequi.</p>
               <div class="d-flex col-12 justify-content-start"><button class="about"><a href="freelancefiche.php">Détails</a></button></div>
            </div>
            <div class="barrecolors"></div>
         </div>




      </div>
   </div>
   <!--PIED DE PAGE-->
   <?php require('./includes/footer.php'); ?>

   <!--JS-->
   <script src="js/index.js"></script>
</body>

</html>