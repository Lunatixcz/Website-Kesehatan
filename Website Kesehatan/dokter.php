<!doctype html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php include 'nav.php' ?>

  <!-- PAGE CONTENTS -->

  <form>
    <div class="container" id="chatbox">
      <div class="row" style="height: 100%; width: 100%; margin: 0; padding: 0;">
        <div class="col-4" id="contact-box">
          <p>Tidak Ada Dokter yang Tersedia..<br>Mohon Ulang Pada Lain Waktu</p>
        </div>
        <div class="col-8" id="text-box">
          <div class="row g-3 align-items-center" id="text-in">
            <div class="col-11" id="inputbox">
              <input type="text" id="inputPassword6" class="form-control">
            </div>
            <div class="col-1" id="submitbtn">
              <button type="reset" class="btn btn-primary">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <div style="height: 20vh;"></div>

  <?php include 'footer.php' ?>
</body>

</html>