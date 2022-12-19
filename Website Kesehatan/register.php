<!doctype html>
<html lang="en">

<?php include './meta.php'; ?>

<body>
  <?php include './nav.php' ?>

  <!-- PAGE CONTENTS -->
  <div class="container-fluid" id="reg" style="height: 130vh;">
    <div class="row">
      <div class="col-7 full-h">
        <div id="reg-card">
          <form id="reg-form">
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

            <button type="submit" class="btn btn-primary" id="reg-btn">Submit</button>
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