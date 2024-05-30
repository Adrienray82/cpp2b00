<div class ="hdr container-fluid px-xs-1 px-sm-1 px-xl-5 d-lg-flex align-items-center col-lg-12">
<div class ="headerleft d-lg-flex align-items-center col-lg-4">
  <div>
    <img src="./media/logo02.png"></img>
  </div>
   <a href= "./index.php"><h2>Job Match</h2></a>
</div>
<div class = "headerright  d-flex justify-content-around align-items-center col-lg-8">
   <a href="./freelances.php">Freelances</a>
   <a href="./annonces.php">Annonces</a>

<!-- Profil -->
<div class="utilisateur d-flex mt-3">
  <?php if( isset($_SESSION['id']) && $_SESSION['id'] !== null ) : 
    ?>
     <?php require('./includes/idconnecte.php') ?>
    
    <?php else : ?>
      <p class="me-2"><b>Connexion : </b><p>
      <a href="./freelance_page_connexion.php">Freelance </a>
      <a href="./demandeur_page_connexion.php">Demandeur </a>
      <?php endif; ?>

</div>
</div>

</div>