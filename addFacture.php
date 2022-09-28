<?php
$username="u133425825_b32";
$password="2&~zZv4&r#R";
$url="sql585.main-hosting.eu";
$database="u133425825_gestionnaire2";
//get id from get
$id = $_GET['id'];
//connection to the database using mysqli
$dbhandle = mysqli_connect($url,$username,$password,$database) or die("Unable to connect to MySQL");
//select facture from factures table where id = $id
$query = "SELECT * FROM factures WHERE id = $id";
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
        <h1 class="text-center py-5">Ajouter Facture</h1>
        <form action="addFactureAction.php?id=<?php echo $id ?>" method="post">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Numéro</label>
                <input type="text" class="form-control" id="numero" name="numero">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="qti" class="form-label">Quantité</label>
                <input type="number" class="form-control" id="qti" name="qti">
            </div>
            <div class="mb-3">
                <label for="prixht" class="form-label">Prix HT</label>
                <input type="number" class="form-control" id="prixht" name="prixht">
            </div>
            <div class="mb-3">
                <label for="tva" class="form-label">TVA</label>
                <input type="number" class="form-control" id="tva" name="tva">
            </div>
            <div class="mb-3">
                <label for="prixtc" class="form-label">Prix TTC</label>
                <input type="number" class="form-control" id="prixtc" name="prixtc">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
        </center>
    </body>
</html>
