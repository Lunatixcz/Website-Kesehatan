<?php
include 'config.php';

// if ($_POST['email'] == mysqli_fetch_array(mysqli_query($con, "SELECT email FROM accounts WHERE email='" . $_POST['email'] . "';"))) {
//   $msg['email'] = "E-mail sudah ada dalam database, mohon memakai e-mail yang lain.";
//   die("");
// }

$insert_command = "INSERT INTO accounts VALUES ('" . $_POST['nama'] . "', '" . $_POST['bd'] . "', '" . $_POST['jk'] .
  "', '" . $_POST['email'] . "', '" . hash('sha256', $_POST['pw']) . "');";

if (mysqli_query($con, $insert_command)) {
  $message['register'] = "Akun berhasil dibuat!";
} else {
  $message['register'] = "Akun gagal dibuat!";
}


echo $message['register'];

?>