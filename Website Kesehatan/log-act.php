<?php
include 'config.php';
session_start();

if (!empty($_POST)) {
  $res = mysqli_query($con, "SELECT `email`, `password`, `nama` FROM `accounts` WHERE `email` = '" .
    $_POST['email'] . "' AND `password` = '" . hash("sha256", $_POST['pw']) . "';");
  $data = mysqli_fetch_array($res);

  if (!empty($data)) {
    session_destroy();
    $_SESSION['email'] = $data['email'];
    $_SESSION['name'] = $data['nama'];
    $message['login'] = 'Login berhasil!';
  } else {
    session_destroy();
    $message['login'] = 'Login gagal!';
  }
}

echo $message['login'];

?>