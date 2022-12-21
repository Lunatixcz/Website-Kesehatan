<?php

if ($_POST) {
    include 'config.php';

    $id = $_GET['id_transaksi'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $camat = $_POST['camat'];
    $pos = $_POST['pos'];
    $metode = $_POST['metode'];

    $query = "UPDATE obat SET provinsi='$provinsi', kota='$kota', camat='$camat', kode_pos='$pos', metode='$metode' WHERE id_transaksi='$id'";
    $execQuery = mysqli_query($con, $query);

    echo '<script>window.location.replace("./cart.php?s=cart");</script>';
} else {
    echo "No Access";
}