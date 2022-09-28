
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
    //query the contact table
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();
    $data = $result->fetchAll();
    function deleteContact($idContact){
        echo $idContact;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mes contacts</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1 class="text-center py-5">Ajouter un contact</h1>  
        <div class="container">
        <form class="row g-3" action="ajoutcontact.php" method="post">
            <div class="col-md-6">
                <label for="validationServer01" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            <div class="col-md-6">
                <label for="validationServer02" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>
            <div class="col-md-6">
                <label for="validationServerUsername" class="form-label">Nom de société</label>
                <input type="text" class="form-control" name="nomsociete" required>
            </div>
            <div class="col-md-6">
                <label for="validationServer03" class="form-label">Ville</label>
                <input type="text" class="form-control" name="ville" required>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">Rue</label>
                <input type="text" class="form-control" name="rue" required>
            </div>
            <div class="col-md-6">
                <label for="validationServer05" class="form-label">Code Postal</label>
                <input type="text" class="form-control" name="cp" required>
            </div>
            <div class="col-md-6">
                <label for="validationServer05" class="form-label">Pays</label>
                <input type="text" class="form-control" name="pays" required>
            </div>
            <div class="col-md-6">
                <label for="validationServer05" class="form-label">Téléphone</label>
                <input type="text" class="form-control" name="tel" required>
            </div>
            <div class="col-md-6">
                <label for="validationServer05" class="form-label">Adresse mail</label>
                <input type="email" class="form-control" name="mail" required>
            </div>
            <div class="text-center py-4">
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
        <?php
            include 'connexion.php';
            

                
            ?>
            <h1 class="text-center py-5">Mon nombre de contacts</h1>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de contacts</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Nombre de contacts</th>
                        <td>
                            <strong>
                                <?php 
                                $compteur = "SELECT COUNT(*) AS count FROM contacts";
                                $resultat = $conn->query($compteur);
                                while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) { 
                                    echo $row['count'];
                                };
                                ?>
                            </strong>
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>
        <h1 class="text-center py-5">Liste des contacts</h1>
        <?php
        //list all contacts
        foreach($data as $row){
            echo "<div class='container py-3'>";
                echo "<div class='row'>";
                    echo "<div class='col-12'>";
                        echo "<div class='card'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>Nom: " . $row['nom'] . " " . $row['prenom'] . "</h5>";
                            echo "<h6 class='card-subtitle mb-2 text-muted'>Societe: " . $row['nomsociete'] . "</h6>";
                            echo "<p class='card-text'> Adresse: " . $row['rue'] . " " . $row['cp'] . "  " . $row['ville'] . " " . $row['pays'] . "</p>";
                            echo "<p class='card-text'>Tel: " . $row['tel'] . "</p>";
                            echo "<p class='card-text'>Mail: " . $row['mail'] . "</p>";
                            
                            //button to delete contact using deleteContact.php
                            echo "<a href='deleteContact.php?id=" . $row['id'] . "' class='btn btn-danger'>Supprimer</a>";

                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
        ?>
    </body>
</html>