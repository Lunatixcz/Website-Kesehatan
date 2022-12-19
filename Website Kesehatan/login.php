<!doctype html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php include 'nav.php' ?>

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
            <button type="submit" class="btn btn-primary" id="reg-btn">Log In</button>

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