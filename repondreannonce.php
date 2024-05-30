<?php
session_start();
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
      <div class="boxwhite d-flex flex-column align-items-center justify-content-start col-12 col-lg-12 mx-lg-12 px-lg-12">
         <div class="titrepage">
            <h2 class="d-flex mx-3 mt-3 mb-5">Répondre à l'annonce</h2>

            <!-- CRUD freelance -->


            <div class="inscription">
               <form action="./scripts/inscription_free.php" method="POST">


                  <div>
                     <label for="cv">Poster votre C.V. :</label>
                     <input type="file" name="cv" id="cv">
                  </div>
                  <div>
                     <textarea id="textecandidature" name="textecandidature">
It was a dark and stormy night...
</textarea>
                  </div>

                  <div class="spacer"></div>
                  <button type="submit">Valider</button>
               </form>

               <div class="spacer"></div>

            </div>

         </div>
      </div>
      <!--PIED DE PAGE-->
      <?php require('./includes/footer.php'); ?>

      <!--JS-->
      <script src="js/index.js"></script>
</body>

</html>