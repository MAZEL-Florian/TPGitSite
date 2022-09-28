<?php
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
    <?php
            include 'navbar.php';
        ?>
    <div class="container">
        <h1 class="text-center py-5">Mon nombre de devis</h1>
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                    <th class="col-4">Nombre de devis</th>
                    <th class="col-4">
                        <?php 
                            $compteur = "SELECT COUNT(*) AS count FROM devis";
                            $resultat = $conn->query($compteur);
                            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) { 
                                echo $row['count'];
                            };
                        ?>
                    </th>
                    </tr>
                </thead>
                </table>
        </div>
    </body>
</html>