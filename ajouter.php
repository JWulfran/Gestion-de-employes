<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['button'])) {
        extract($_POST);
        if (isset($nom) && isset($prenom) && isset($age)) {
            include_once "connexion.php";
            $request = mysqli_query($connexion, "INSERT INTO employe_main_db VALUES(NULL, '$nom','$prenom','$age')");
            if ($request) {
                header("location: index.php");
            } else {
                $error_message = "Erreur : Employé non ajouté!";
            }
        } else {
            $error_message = "Veuillez remplir tous les champs!";
        }
    }

    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="./images/back.png">Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="error_message">
            <?php
            if (isset($error_message)) {
                echo $error_message;
            }
            ?>
        </p>
        <form action="" method="post">
            <label>Nom</label>
            <input type="text" name="nom" id="nom">
            <label>Prénom</label>
            <input type="text" name="prenom" id="prenom">
            <label>Age</label>
            <input type="number" name="age" id="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>