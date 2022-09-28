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
$conditionpaiement = $_POST['conditionpaiement'];

$update = "UPDATE `devis` SET `numero` = '$numero', `conditionpaiement` = '$conditionpaiement', `description` = '$description', `date` = '$date', `qti` = '$qti', `prixht` = '$prixht', `tva` = '$tva', `prixtc` = '$prixtc' WHERE `devis`.`id` = $id;";

$conn->exec($update);
header('Location: devis.php');
?>


