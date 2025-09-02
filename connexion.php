<?php
$connexion = mysqli_connect("localhost", "root", "", "employee_db");
if (!$connexion) {
    echo "La connexion à la base données a échouée";
}
