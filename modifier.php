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
    include_once "connexion.php";
    $id = $_GET['id'];
    $request = mysqli_query($connexion, "SELECT * FROM employe_main_db WHERE id=$id");
    $row = mysqli_fetch_assoc($request);
    if (isset($_POST['button'])) {
        extract($_POST);
        if (isset($nom) && isset($prenom) && isset($age)) {
            $request = mysqli_query($connexion, "UPDATE employe_main_db SET nom ='$nom', prenom ='$prenom', age ='$age' WHERE id=$id");
            if ($request) {
                header("location: index.php");
            } else {
                $error_message = "Erreur : Employé non modifié!";
            }
        } else {
            $error_message = "Veuillez remplir tous les champs!";
        }
    }
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="./images/back.png">Retour</a>
        <h2>Modifier les informations de : <br><?= $row['nom'] ?></h2>
        <p class="error_message">
            <?php
            if (isset($error_message)) {
                echo $error_message;
            }
            ?>
        </p>
        <form action="" method="post">
            <label>Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $row['nom'] ?>">
            <label>Prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?= $row['prenom'] ?>">
            <label>Age</label>
            <input type="number" name="age" id="age" value="<?= $row['age'] ?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>