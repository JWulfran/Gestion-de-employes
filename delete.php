<?php
include_once "connexion.php";
$id = $_GET['id'];
$request = mysqli_query(($connexion), "DELETE FROM employe_main_db WHERE id=$id");
header("Location: index.php");
