<?php
//get post data
$date = $_POST['date'];
$numero = $_POST['numero'];
$description = $_POST['description'];
$qti = $_POST['qti'];
$prixht = $_POST['prixht'];
$tva = $_POST['tva'];
$prixtc = $_POST['prixtc'];
$id = $_GET['id'];
$username="u133425825_b32";
$password="2&~zZv4&r#R";
$url="sql585.main-hosting.eu";
$database="u133425825_gestionnaire2";
//connection to the database using mysqli
$dbhandle = mysqli_connect($url,$username,$password,$database) or die("Unable to connect to MySQL");
//insert facture into factures table
$query = "INSERT INTO factures (date, numero, description, qti, prixht, tva, prixtc, idcontact) VALUES ('$date', '$numero', '$description', '$qti', '$prixht', '$tva', '$prixtc', '$id')";
$result = mysqli_query($dbhandle, $query);
//close the connection
mysqli_close($dbhandle);
//redirect to facture.php
header("Location: facture.php?id=$id");
?>
