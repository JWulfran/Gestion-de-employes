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
            while ($row = mysqli_fetch_array($request)) {
                echo "<tr>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['prenom'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td><a href='modifier.php?id=" . $row['id'] . "' class='Btn_edit'><img src='./images/pen.png'></a></td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "' class='Btn_delete'><img src='./images/trash.png'></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>