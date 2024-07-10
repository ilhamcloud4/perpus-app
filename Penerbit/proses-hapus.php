<?php
if($_GET["ID"]) {
    include '../config/database.php';
    include '../object/Penerbit.php';

    $database = new Database();
    $db = $database->getConnection();

    $Penerbit = new Penerbit($db);
    $Penerbit->ID = $_GET["ID"]; 

    $Penerbit->delete();
}

header("Location: http://localhost/perpus_app/Penerbit/index.php");
?>