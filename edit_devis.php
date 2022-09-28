<?php
include("connexion.php");
$id = $_POST['id'];

$select = 'SELECT * FROM devis where id = '.$id.';';
$reponse = $conn->query($select);
$donnees = $reponse->fetch();




$reponse->closeCursor()
?>
<?php
include("navbar.php");
?>
<html>

<head>
    <title>Devis</title>
</head>

<body>

    <h1><u>Modifier un Devis</u></h1>

    <div class="formbold-main-wrapper">

        <div class="formbold-form-wrapper">
            <form action="edit_devis_ex.php" method="POST">
                <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> choisir un contact </label>
                     <select id="nom" name="nom">
                     <?php
                        $reponse2 = $conn->query('SELECT * FROM contacts');
                        $donnees2 = $reponse2->fetch();

                        while ($donnees2 = $reponse2->fetch()) {
                            echo '<option value="' . $donnees2['id'] . '">' . $donnees2['prenom'] . '</option>';
                        }

                        $reponse->closeCursor()
                        ?>
                    </select> 
                </div>
                <input type="hidden" name="id" id="id" value="<?php echo $donnees['id'] ?>" placeholder="Enter the date" class="formbold-form-input" />
                <div class="formbold-mb-5">
                    <label for="email" class="formbold-form-label"> date </label>
                    <input type="date" name="date" id="date" value="<?php echo $donnees['date'] ?>" placeholder="Enter the date" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> numéro </label>
                    <input type="text" name="numero" id="numero" value="<?php echo $donnees['numero'] ?>" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="message" class="formbold-form-label"> description </label>
                    <textarea rows="6" name="description" id="description" value="<?php echo $donnees['description'] ?>"  class="formbold-form-input"></textarea>
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> quantité </label>
                    <input type="text" name="qti" id="qti" placeholder="amount" value="<?php echo $donnees['qti'] ?>" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> prix HT</label>
                    <input type="text" name="prixht" id="prixht" placeholder="price without tax" value="<?php echo $donnees['prixht'] ?>" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> TVA </label>
                    <input type="text" name="tva" id="tva" placeholder="VAT" value="<?php echo $donnees['tva'] ?>" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> prix ttc </label>
                    <input type="text" name="prixtc" id="prixtc" placeholder="All taxes included price" value="<?php echo $donnees['prixtc'] ?>" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> prix ttc </label>
                    <input type="text" name="conditionpaiement" id="conditionpaiement" placeholder="condition" value="<?php echo $donnees['conditionpaiement'] ?>" class="formbold-form-input" />
                </div>

                <div>
                    <button class="formbold-btn">modifier</button>
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
        .formbold-btn-delet{
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: red;
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