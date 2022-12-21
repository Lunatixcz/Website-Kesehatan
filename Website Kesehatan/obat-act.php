<?php

include './config.php';

if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}

if ($_POST) {
    $preskripsi = $_POST['preskripsi'];
    $dokter = $_POST['dokter'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $camat = $_POST['camat'];
    $pos = $_POST['pos'];
    $metode = $_POST['metode'];
    $user_id = $_SESSION['id'];

    $query = "INSERT INTO obat(`preskripsi`, `dokter`, `provinsi`, `kota`, `camat`, `kode_pos`, `metode`, `id_user`) VALUES('$preskripsi', '$dokter', '$provinsi', '$kota', '$camat', '$pos', '$metode', '$user_id')";
    $execQuery = mysqli_query($con, $query);

    echo '<script>window.location.replace("./cart.php?s=cart");</script>';
} else {
    echo "ERROR";
}
