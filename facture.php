<?php
$username="u133425825_b32";
$password="2&~zZv4&r#R";
$url="sql585.main-hosting.eu";
$database="u133425825_gestionnaire2";
//get id from get
$id = $_GET['id'];
//connection to the database using mysqli
$dbhandle = mysqli_connect($url,$username,$password,$database) or die("Unable to connect to MySQL");
//query to select all factures from the factures table
$query = "SELECT * FROM factures WHERE idcontact = $id";
//execute the query
$result = mysqli_query($dbhandle,$query) or die("Error in Selecting " . mysqli_error($dbhandle));
//create an array
$factureArray = array();
//fetch data from the database
while($row = mysqli_fetch_assoc($result))
{
  $factureArray[] = $row;
}
//close the connection
mysqli_close($dbhandle);
include 'navbar.php';
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
        <h1 class="text-center py-5">Factures</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Numéro</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix HT</th>
                    <th scope="col">TVA</th>
                    <th scope="col">Prix TTC</th>
                    <th scope="col">Condition Paiement</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($factureArray as $facture){
                    echo "<tr>";
                    echo "<td>$facture[date]</td>";
                    echo "<td>$facture[numero]</td>";
                    echo "<td>$facture[description]</td>";
                    echo "<td>$facture[qti]</td>";
                    echo "<td>$facture[prixht]</td>";
                    echo "<td>$facture[tva]</td>";
                    echo "<td>$facture[prixtc]</td>";
                    echo "<td>$facture[conditionpaiement]</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="addFacture.php?id=<?php echo $id; ?>" class="btn btn-primary">Ajouter une facture</a>
        </center>
    </body>
</html>

