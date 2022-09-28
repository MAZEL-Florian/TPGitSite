
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

<table>
    <tr>
        <th>nom du client</th>
        <th>date</th>
        <th>numéro</th>
        <th>description</th>
        <th>quantité</th>
        <th>prix ht</th>
        <th>tva</th>
        <th>prix ttc</th>
        <th>condition de paiement</th>
        <th>supprimer</th>
        <th>modifier</th>
    </tr>
    <?php
    $id = $_GET['id'];
    $select = "SELECT * FROM devis WHERE idcontact = $id";
    $result = $conn->query($select);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        $row_contact = $row['idcontact'];
        
        $select2 = "SELECT * FROM devis WHERE idcontact = $id";
        $result2 = $conn->query($select2);
        
        $select3 = "SELECT nom, prenom FROM contacts WHERE id = $id";
        $result3 = $conn->query($select3);
        while ($row2 = $result3->fetch(PDO::FETCH_ASSOC)) {
            echo '<td>' . $row2['prenom'] . ' ' . $row2['nom'] . '</td>';
        }
        echo '<td>' . $row['date'] . '</td>';
        echo '<td>' . $row['numero'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . $row['qti'] . '</td>';
        echo '<td>' . $row['prixht'] . '</td>';
        echo '<td>' . $row['tva'] . '</td>';
        echo '<td>' . $row['prixtc'] . '</td>';
        echo '<td>' . $row['conditionpaiement'] . '</td>';
        echo '<td><form action="delete_devis.php" method="POST"><input type="hidden" name="id" id="id" value="'. $row ['id'].'"  /><button class="formbold-btn-delet">Supprimer</button></form></td>';
        echo '<td><form action="edit_devis.php" method="POST"><input type="hidden" name="id" id="id" value="'. $row ['id'].'" /><button class="formbold-btn">moidifier</button></form></td>';
        echo '</tr>';
    }
    ?>
</table>