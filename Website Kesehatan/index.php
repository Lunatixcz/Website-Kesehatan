<?php
include 'config.php';

session_start();

if (isset($_SESSION['username'])) {
  echo "<script>window.alert(Login berhasil, selamat datang " . $acc['name'] . ")</script>";
  header("Location: ./dashboard.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['login_email'];
  $password = hash("sha256", $_POST['login_pw']);

  $q = "SELECT * FROM accounts WHERE `email` = '$email' AND `password`='$password'";
  $res = mysqli_query($con, $q);
  if ($res->num_rows >= 0) {
    $acc = mysqli_fetch_assoc($res);
    echo "Login berhasil, selamat datang " . $acc['name'];
    $_SESSION['name'] = $acc['name'];
    header('Location: ./dashboard.php');
  } else {
    echo "<script>window.alert('email atau password tidak ditemukan, silahkan coba lagi!')</script>";
  }
}

?>

<!doctype html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand larger disabled" href="./dashboard.php"> <img src="./image/healthcare white.png" alt="">
        USU
        Sehat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon disabled"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link disabled" href="./dokter.php?s=dokter">Chat Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="./artikel.php?s=artikel">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="./obat.php?s=obat">Obat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="./cart.php?s=cart">Cart</a>
          </li>
        </ul>
        <ul class="navbar-nav" id="reg-log">
          <li class="nav-item">
            <a class="nav-link" href="./register.php?s=register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php?s=login">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- PAGE CONTENTS -->
  <div class="container-fluid" id="reg">
    <div class="row">
      <div class="col-7 full-h">
        <div id="reg-card">
          <form id="login-form">
            <div class="sign-up text-center">
              Don't have an account? <a href="./register.html?s=register">Sign Up</a>
            </div>
            <center>
              <h4>Log In</h4>
            </center>

            <div class="mb-3">
              <labelclass="form-label">E-mail</label>
                <input type="email" class="form-control" id="log-email" name="email" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="log-pw" name="pw" required>
            </div>

            <div class="forgot">
              <a href="">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary" id="log-submit" name="submit">Submit</button>
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