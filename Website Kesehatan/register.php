<?php

include 'config.php';

session_start();

if (isset($_SESSION['name'])) {
  header('Location: dashboard.php');
}

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $tgl = $_POST['bd'];
  $jk = $_POST['jk'];
  $email = $_POST['email'];
  $pass1 = $_POST['pw'];
  $pass = hash('sha256', $pass1);

  $check = mysqli_query($con, "SELECT * FROM accounts WHERE `email` = '$email'");

  if ($check->num_rows <= 0) {
    $query = "INSERT INTO accounts VALUES ('$nama','$tgl','$jk','$email','$pass')";
    $execQuery = mysqli_query($con, $query);
    if ($execQuery) {
      echo "<script>alert('Akun berhasil dibuat')</script>";
      header('Location: index.php');
    } else {
      echo "<script>alert('Akun gagal dibuat, mohon dicek data dalam form')</script>";
    }
  }
}

?>
<!doctype html>
<html lang="en">

<?php include './meta.php'; ?>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand larger" href="./dashboard.php"> <img src="./image/healthcare white.png" alt=""> USU
        Sehat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./dokter.php?s=dokter">Chat Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./artikel.php?s=artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./obat.php?s=obat">Obat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cart.php?s=cart">Cart</a>
          </li>
        </ul>
        <ul class="navbar-nav" id="reg-log">
          <a class="nav-link disabled" style="font-weight: bolder; color: white;">
            <?php
          session_start();
          if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
          } else {
            echo 'Anonymous User';
          }
          ?>
          </a>
          <?php
        if (isset($_SESSION['name'])) {
          echo '
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Log out</a>
        </li>
        ';
        }
        ?>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./register.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- PAGE CONTENTS -->
  <div class="container-fluid" id="reg" style="height: 130vh;">
    <div class="row">
      <div class="col-7 full-h">
        <div id="reg-card">
          <form id="reg-form" method="POST" action="">
            <div class="sign-up text-center">
              Return to <a href="./login.html?s=login">Log In</a>
            </div>
            <center>
              <h4>Register</h4>
            </center>

            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" id="reg-nama" name="nama" maxlength="65" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" id="reg-bd" name="bd" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Jenis Kelamin</label>
              <select class="form-select" id="reg-jk" name="jk" required>
                <option selected value="R">Ingin Merahasiakan</option>
                <option value="P">Pria</option>
                <option value="W">Wanita</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">E-mail</label>
              <input type="email" class="form-control" id="reg-email" name="email" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="reg-pw" name="pw" minlength="4" maxlength="30" required>
            </div>

            <button type="submit" class="btn btn-primary" id="reg-btn" name="submit">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-5 full-h">
        <ul id="perks">
          <li>Bergabung dengan komunitas yang terdiri lebih dari 1 juta pengguna.</li>
          <li>Dapatkan akses ke layanan pemesanan obat preskripsi.</li>
          <li>Berbicara dengan dokter- tanpa tatap muka.</li>
        </ul>
      </div>
    </div>
  </div>

  <?php include './footer.php' ?>
</body>

</html>