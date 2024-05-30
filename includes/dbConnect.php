<?php
// local
$host = "localhost";
$user = "root";
$dbPass = "";
$dbName = "ccp2b00";

// en ligne
// $host = "https://cluster030.ovh.net.........";
// $user = "dbu093512746";
// $dbPass = "çéàè'è_çé-'ç&éteygdauzodb_èi";
// $dbName = "db0932627";

$connect = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=UTF8', $user, $dbPass);
?>