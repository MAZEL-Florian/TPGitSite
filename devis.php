<html>

<head>
    <title>Devis</title>
</head>

<body>
    <h1>Devis</h1>
    <div class="table">
        <table>
            <tr>
                <th>Numéro</th>
                <th>Client</th>
                <th>Montant</th>
                <th>Date</th>
                <th>Statut</th>
            </tr>
            <tr>
                <td>etr</td>
                <td>ter</td>
                <td>gdf</td>
                <td>ter</td>
                <td>gdf</td>
            </tr>
        </table>
    </div>


    <br><br><br><br>



    <div class="formbold-main-wrapper">

        <div class="formbold-form-wrapper">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="formbold-mb-5">
                    <label for="name" class="formbold-form-label"> choisir un contact </label>
                    <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="email" class="formbold-form-label"> date </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> numéro </label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="message" class="formbold-form-label"> description </label>
                    <textarea rows="6" name="message" id="message" placeholder="Type your message" class="formbold-form-input"></textarea>
                </div>
                
                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> quantité </label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="formbold-form-input" />
                </div>
                
                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> prix HT</label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="formbold-form-input" />
                </div>
                
                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> TVA </label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="formbold-form-input" />
                </div>

                <div class="formbold-mb-5">
                    <label for="subject" class="formbold-form-label"> prix ttc </label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="formbold-form-input" />
                </div>

                <div>
                    <button class="formbold-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
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
    </style>
</body>

</html>

<?php
include("connexion.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dbh->exec("INSERT INTO adherants(id,nom,prenom) VALUES('','$nom','$prenom')");

?>