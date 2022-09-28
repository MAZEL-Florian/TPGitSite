<?php
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
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nomsociete = $_POST['nomsociete'];
    $ville = $_POST['ville'];
    $rue = $_POST['rue'];
    $cp = $_POST['cp'];
    $pays = $_POST['pays'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];

    echo ($nom.' '.$prenom.' '.$nomsociete.' '.$ville.' '.$rue.' '.$cp.' '.$pays.' '.$tel.' '.$mail);
    $insert="INSERT INTO contacts (nom, prenom, nomsociete, ville, rue, cp, pays, tel, mail) VALUES ('$nom', '$prenom', '$nomsociete', '$ville', '$rue', '$cp', '$pays', '$tel', '$mail');";

    echo '<br>'.$insert.'<br>';

    $conn->exec($insert);

    header('Location: contact.php');
?>