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
        <h1 class="text-center">Contact</h1>  
        <div class="container">
        <form class="row g-3">
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationServerUsername" class="form-label">Nom de société</label>
                <input type="text" class="form-control" id="nomsociete" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationServer03" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" required>
                <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationServer04" class="form-label">Rue</label>
                <input type="text" class="form-control" id="rue" required>
                <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationServer05" class="form-label">Code Postal</label>
                <input type="text" class="form-control" id="cp" required>
            </div>
            <div class="col-md-3">
                <label for="validationServer05" class="form-label">Pays</label>
                <input type="text" class="form-control" id="pays" required>
            </div>
            <div class="col-md-3">
                <label for="validationServer05" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="tel" required>
            </div>
            <div class="col-md-3">
                <label for="validationServer05" class="form-label">Adresse mail</label>
                <input type="email" class="form-control" id="mail" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
</div>
    </body>
</html>