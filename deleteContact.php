<?php
//get id from url 
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
//delete contact
$sql = "DELETE FROM contacts WHERE id = $id";
$conn->exec($sql);
//redirect to contact.php
header("Location: contact.php");
?>