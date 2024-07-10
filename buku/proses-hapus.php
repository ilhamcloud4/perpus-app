<?php
if($_GET["ID"]) {
    include '../config/database.php';
    include '../object/buku.php';

    $database = new Database();
    $db = $database->getConnection();

    $buku = new Buku($db);
    $buku->ID = $_GET['ID'];

    $buku->delete();     

}
header("Location: http://localhost/perpus_app/buku/index.php");
?>