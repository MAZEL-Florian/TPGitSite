<?php
$username="u133425825_b32";
$password="2&~zZv4&r#R";
$url="sql585.main-hosting.eu";
$database="u133425825_gestionnaire2";

//connection to the database using mysqli
$dbhandle = mysqli_connect($url,$username,$password,$database) or die("Unable to connect to MySQL");
//query to select all factures from the factures table
$query = "SELECT * FROM factures";
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
//return the array
$fakefacture = array(
    'id' => 1,
    'date' => '2018-01-01',
    'numero' => '0606060606',
    'description' => 'description',
    'qti' => '7',
    'prixht' => '250',
    'tva' => '20',
    'prixtc' => '300'
);
$factureArray[0] = $fakefacture;
foreach($factureArray as $facture){
    //div right
    echo "<div >";
    echo "Facture n°".$facture['id']." du ".$facture['date']."<br>";
    echo "<div style='float:left;'>".$facture['numero']."</div>";
    echo "<div style='float:left;'>".$facture['description']."</div>";
    echo "<div style='float:left;'>".$facture['qti']."</div>";
    echo "<div style='float:left;'>".$facture['prixht']."</div>";
    echo "<div style='float:left;'>".$facture['tva']."</div>";
    echo "<div>".$facture['prixtc']."</div>";
    echo "</div>";
}
//form to add a new facture using bootstrap
echo "<form action='facture.php' method='post'>";
echo "<div class='form-group'>";
echo "<label for='id'>id</label>";
echo "<input type='text' class='form-control' id='id' name='id' placeholder='id'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='date'>date</label>";
echo "<input type='text' class='form-control' id='date' name='date' placeholder='date'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='numero'>numero</label>";
echo "<input type='text' class='form-control' id='numero' name='numero' placeholder='numero'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='description'>description</label>";
echo "<input type='text' class='form-control' id='description' name='description' placeholder='description'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='qti'>qti</label>";
echo "<input type='text' class='form-control' id='qti' name='qti' placeholder='qti'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='prixht'>prixht</label>";
echo "<input type='text' class='form-control' id='prixht' name='prixht' placeholder='prixht'>"; 
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='tva'>tva</label>";
echo "<input type='text' class='form-control' id='tva' name='tva' placeholder='tva'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='prixtc'>prixtc</label>";
echo "<input type='text' class='form-control' id='prixtc' name='prixtc' placeholder='prixtc'>";
echo "</div>";
echo "<button type='submit' class='btn btn-default'>Submit</button>";
echo "</form>";

echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">';

?>