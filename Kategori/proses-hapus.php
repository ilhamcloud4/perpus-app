<?php
if($_GET["ID"]) {
    include '../config/database.php';
    include '../object/kategori.php';

    $database = new Database();
    $db = $database->getConnection();

    $kategori = new Kategori($db);
    $kategori->ID = $_GET["ID"]; 

    $kategori->delete();
}

header("Location: http://localhost/perpus_app/kategori/index.php");
?>