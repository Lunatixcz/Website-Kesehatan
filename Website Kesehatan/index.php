<?php
include 'config.php';

session_start();

if (isset($_SESSION['name'])) {
  header("Location: dashboard.php");
}

if (isset($_POST['login_submit'])) {
  $email = $_POST['login_email'];
  $password = hash("sha256", $_POST['login_pw']);

  $q = "SELECT * FROM accounts WHERE `email` = '$email' AND `password`='$password'";
  $res = mysqli_query($con, $q);
  if ($res->num_rows > 0) {
    $acc = mysqli_fetch_assoc($res);
    echo "<script>alert('Login berhasil, selamat datang!')</script>";

    $_SESSION['name'] = $acc['nama'];
    $_SESSION['id'] = $acc['id'];
    header('Location: dashboard.php');
  } else {
    echo "<script>alert('email atau password tidak ditemukan, silahkan coba lagi!')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php include 'nav.php' ?>

  <!-- PAGE CONTENTS -->
  <div class="container-fluid" id="reg">
    <div class="row">
      <div class="col-7 full-h">
        <div id="reg-card">
          <form id="login-form" method="POST" action="">
            <div class="sign-up text-center">
              Don't have an account? <a href="./register.php?=register">Sign Up</a>
            </div>
            <center>
              <h4>Log In</h4>
            </center>

            <div class="mb-3">
              <labelclass="form-label">E-mail</label>
                <input type="email" class="form-control" id="log_email" name="login_email" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="log_pw" name="login_pw" required>
            </div>

            <div class="forgot">
              <a href="">Forgot Password?</a>
            </div>
            <button type="submit" class="btn" id="log_submit" name="login_submit">Log In</button>
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