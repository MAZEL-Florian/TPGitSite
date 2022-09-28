<?php
include("connexion.php");
$id = $_POST['id'];

$delet="DELETE FROM devis WHERE id = '$id'";
echo '<br>'.$delet.'<br>';
$conn->exec($delet);

header('Location: devis.php');

?>