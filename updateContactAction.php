<?php
//recover info from post and id from get
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$nomsociete = $_POST['nomsociete'];
$ville = $_POST['ville'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$pays = $_POST['pays'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$id = $_GET['id'];

//connect to database
$servername = 'sql585.main-hosting.eu';
$user = "u133425825_b32";
$pass = "2&~zZv4&r#R";

try{
    $conn = new PDO("mysql:host=$servername;dbname=u133425825_gestionnaire2", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
//update contact
$sql = "UPDATE contacts SET nom = '$nom', prenom = '$prenom', nomsociete = '$nomsociete', ville = '$ville', rue = '$rue', cp = '$cp', pays = '$pays', tel = '$tel', mail = '$mail' WHERE id = $id";
$conn->exec($sql);
//redirect to contact.php
header("Location: contact.php");
?>