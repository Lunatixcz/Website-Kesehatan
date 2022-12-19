<?php
$host = "localhost";
$user = "root";
$pass = "v1ritaErt4rahiri";
$db = "pegawai";

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo 'Koneksi Gagal: ' . mysqli_connect_error();
}
?>