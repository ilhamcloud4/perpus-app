<?php
if ($_POST) {
    include '../config/database.php';
    include '../object/Penerbit.php';

    $database = new Database();
    $db = $database->getConnection();

    $Penerbit = new Penerbit($db);

    $Penerbit->NamaPenerbit = $_POST['NamaPenerbit'];
    $Penerbit->Alamat = $_POST['alamat'];
    $Penerbit->NoTelp = $_POST['notelp'];

    $Penerbit->create();
}

header("Location: http://localhost/perpus_app/Penerbit/index.php");
?>