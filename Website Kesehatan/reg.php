<?php
include 'config.php';

// if ($_POST['email'] == mysqli_fetch_array(mysqli_query($con, "SELECT email FROM accounts WHERE email='" . $_POST['email'] . "';"))) {
//   $msg['email'] = "E-mail sudah ada dalam database, mohon memakai e-mail yang lain.";
//   die("");
// }

if($POST){
    $nama = $_POST['nama'];
    $tgl = $_POST['bd'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];
    $pass = hash('sha256', $_POST['pw']);


    $query = "INSERT INTO accounts VALUES ('$nama','$tgl','$jk','$email','$pass')";
    $execQuery = mysqli_query($con, $query);

    if ($execQuery) {
        echo
        "<script>
        alert('Akun Berhasil Dibuat');
        window.location.href = 'login.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Akun Gagal Dibuat');
        window.location.href = 'login.php';
        </script>";
    }
} else {
    echo "No Access";
}

