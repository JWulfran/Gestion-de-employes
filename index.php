<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="./ajouter.php" class="Btn_add"> <img src="./images/plus.png"> Ajouter </a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
            /*Connexion à la base données*/
            include_once "connexion.php";
            // Afficher la liste des employés
            $request = mysqli_query($connexion, "SELECT * FROM employe_main_db");
            if (mysqli_num_rows($request) == 0) {
                echo "Vous n'avez pas encore ajouter d'employé!";
            }
            ?>
        </table>
    </div>
</body>

</html>