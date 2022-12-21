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
    $query = "INSERT INTO accounts VALUES (NULL, '$nama','$tgl','$jk','$email','$pass')";
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
  <?php include 'nav.php' ?>

  <!-- PAGE CONTENTS -->
  <div class="container-fluid" id="reg" style="height: 130vh;">
    <div class="row">
      <div class="col-7 full-h">
        <div id="reg-card">
          <form id="reg-form" method="POST" action="">
            <div class="sign-up text-center">
              Return to <a href="./index.php?s=login">Log In</a>
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

            <button type="submit" class="btn" id="reg-btn" name="submit">Register</button>
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