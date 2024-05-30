<?php
session_start();
require('../includes/dbConnect.php');

$query = $connect->prepare("DELETE FROM freelance WHERE id = ?");
$query->execute([$_SESSION['id']]);
session_destroy();
header('Location: ../index.php');
exit();
?>