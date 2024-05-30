<div class="profilconnecte d-flex align-items-center">
    <div class="me-2 mb-3"><img src="./media/user.png"></img></div>
    
    
<button class="mb-4"><a href="./scripts/deconnexion.php">Se déconnecter</a></button>
</div>

<?php 
if(!empty($_SESSION['idd'])) {
  echo'<div class="me-3"><a>'. $_SESSION['pseudo'] . '</a></div>';
} elseif (!empty($_SESSION['idf'])) {
    echo'<div class="me-3"><a href="./profil_demandeur.php">' . $_SESSION['pseudo'] . '</a></div>';
};
?>


<?php
if (!empty($_GET['inscr']) && $_GET['inscr'] === "stagiaires" && empty($_SESSION['id'])) {
}else
    ?>