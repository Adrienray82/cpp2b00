<?php
session_start();
require('../includes/dbConnect.php');

$query = $connect->prepare("DELETE FROM demandeur WHERE id = ?");
$query->execute([$_SESSION['id']]);
session_destroy();
header('Location: ../index.php');
exit();
?>