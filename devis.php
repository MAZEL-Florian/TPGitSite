<?php
include("connexion.php");
?>

<html>

<head>
    <title>Devis</title>
</head>

<body>

    <h1><u>Devis</u></h1>
    <div style="text-align: -webkit-center;" class="table">
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
            </tr>
            <?php
            $select = "SELECT * FROM devis";
            $result = $conn->query($select);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                $row_contact = $row['idcontact'];
                $select2 = "SELECT prenom FROM contacts WHERE id = '$row_contact'";
                $result2 = $conn->query($select2);
                while ($row2 = $result2->fetch(PDO::FETCH_ASSOC)) {
                    echo '<td>' . $row2['prenom'] . '</td>';
                }
                echo '<td>' . $row['date'] . '</td>';
                echo '<td>' . $row['numero'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '<td>' . $row['qti'] . '</td>';
                echo '<td>' . $row['prixht'] . '</td>';
                echo '<td>' . $row['tva'] . '</td>';
                echo '<td>' . $row['prixtc'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>


    <br><br><br><br>

    <h1><u>Créer un nouveau Devis</u></h1>

    <div class="formbold-main-wrapper">

        <div class="formbold-form-wrapper">
            <form action="send_devis.php" method="POST">
                <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> choisir un contact </label>
                    <select id="nom" name="nom">
                        <?php
                        $reponse = $conn->query('SELECT * FROM contacts');
                        $donnees = $reponse->fetch();

                        while ($donnees = $reponse->fetch()) {
                            echo '<option value="' . $donnees['id'] . '">' . $donnees['prenom'] . '</option>';
                        }

                        $reponse->closeCursor()
                        ?>
                    </select>
                </div>

                <div class="formbold-mb-5">
                    <label for="email" class="formbold-form-label"> date </label>
                    <input type="date" name="date" id="date" placeholder="Enter the date" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> numéro </label>
                    <input type="text" name="number" id="number" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="message" class="formbold-form-label"> description </label>
                    <textarea rows="6" name="message" id="message" placeholder="Type your message" class="formbold-form-input"></textarea>
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> quantité </label>
                    <input type="text" name="amount" id="amount" placeholder="amount" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> prix HT</label>
                    <input type="text" name="price" id="price" placeholder="price without tax" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> TVA </label>
                    <input type="text" name="VAT" id="VAT" placeholder="VAT" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> prix ttc </label>
                    <input type="text" name="taxes" id="taxes" placeholder="All taxes included price" class="formbold-form-input" />
                </div>

                <div>
                    <button class="formbold-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <style>
        th {
            padding: 20px;
            margin: 20px;
        }

        td {
            padding: 20px;
            margin: 20px;
            border: 1px solid red;
        }

        body {
            font-family: "Inter", sans-serif;
        }

        #nom {
            width: 100%;
            height: 50px;
        }

        .formbold-mb-5 {
            margin-bottom: 20px;
        }

        .formbold-pt-3 {
            padding-top: 12px;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
            background: white;
        }

        .formbold-form-label {
            display: block;
            font-weight: 500;
            font-size: 16px;
            color: #07074d;
            margin-bottom: 12px;
        }

        .formbold-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .formbold-form-input {
            width: 100%;
            padding: 12px 24px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
        }

        .formbold-px-3 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .w-full {
            width: 100%;
        }

        @media (min-width: 540px) {
            .sm\:w-half {
                width: 50%;
            }
        }



        h1 {
            text-align: center;
        }






        th {
            background-color: #fcb424;
        }
    </style>
</body>

</html>