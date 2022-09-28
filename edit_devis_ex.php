<?php
include("connexion.php");
$id = $_POST['id'];
$date = $_POST['date'];
$numero = $_POST['numero'];
$description = $_POST['description'];
$qti = $_POST['qti'];
$prixht = $_POST['prixht'];
$tva = $_POST['tva'];
$prixtc = $_POST['prixtc'];


$update = "UPDATE `devis` SET `numero` = '$numero', `description` = '$description', `description` = '$date', `description` = '$qti', `description` = '$prixht', `description` = '$tva', `description` = '$prixtc' WHERE `devis`.`id` = 14;";

?>


