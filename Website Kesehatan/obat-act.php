<?php

include './config.php';

if($_POST){
    $preskripsi = $_POST['pres'];
    $dokter = $_POST['dokter'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $camat = $_POST['camat'];
    $pos = $_POST['pos'];
    $metode = $_POST['metode'];

    $query = "INSERT INTO obat VALUES('$preskripsi', '$dokter', '$provinsi', '$kota', '$camat', '$pos', '$metode')";
    $execQuery = mysqli_query($con, $query);
}

