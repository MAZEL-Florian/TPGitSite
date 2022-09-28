<?php
//update contact
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
//get contact info
$sql = "SELECT * FROM contacts WHERE id = $id";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>        
        <center>
        <h1 class="text-center py-5">Modifier Contact</h1>
        <?php
        //form filled with contact info
        while($row = $result->fetch()){
            echo "<form action='updateContactAction.php?id=$id' method='POST'>";
            echo
            "<div class='col-md-6'>
                <label for='validationServer01' class='form-label'>Nom</label>
                <input type='text' class='form-control' name='nom' value='$row[nom]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServer02' class='form-label'>Prénom</label>
                <input type='text' class='form-control' name='prenom' value='$row[prenom]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServerUsername' class='form-label'>Nom de société</label>
                <input type='text' class='form-control' name='nomsociete' value='$row[nomsociete]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServer03' class='form-label'>Ville</label>
                <input type='text' class='form-control' name='ville' value='$row[ville]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServer04' class='form-label'>Rue</label>
                <input type='text' class='form-control' name='rue' value='$row[rue]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServer04' class='form-label'>Code Postale</label>
                <input type='text' class='form-control' name='cp' value='$row[cp]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServer05' class='form-label'>Code Postal</label>
                <input type='text' class='form-control' name='cp' value='$row[cp]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServer05' class='form-label'>Téléphone</label>
                <input type='text' class='form-control' name='telephone' value='$row[tel]' required>
            </div>
            <div class='col-md-6'>
                <label for='validationServer05' class='form-label'>Email</label>
                <input type='text' class='form-control' name='email' value='$row[mail]' required>
            </div>
            ";
            //submit button
            echo "<div class='col-12'>
                <button class='btn btn-primary' type='submit'>Modifier</button>
            </div>";
            echo "</form>";
        }?>
        </center>
    </body>
</html>