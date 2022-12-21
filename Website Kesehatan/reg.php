<?php
include 'config.php';

if ($_POST) {
    $nama = $_POST['nama'];
    $tgl = $_POST['bd'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];
    $pass1 = $_POST['pw'];
    $pass = hash('sha256', $pass1);


    $query = "INSERT INTO accounts VALUES ('$nama','$tgl','$jk','$email','$pass')";
    $execQuery = mysqli_query($con, $query);
    echo '<script>window.location.replace("./index.php");</script>';
    exit();
} else {
    echo "No Access";
}
?>