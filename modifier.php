<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="./images/back.png">Retour</a>
        <h2>Modifier les informations<br> d'un employé</h2>
        <p class="error_message">
            Veuillez remplir tous les champs!
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