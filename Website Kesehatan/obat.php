<!doctype html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php include 'nav.php' ?>

  <!-- PAGE CONTENTS -->
  <div id="order-form">
    <form action="./index.html">
      <h5>Informasi Medis</h5>
      <div class="mb-3">
        <label for="pres" class="form-label">Preskripsi</label>
        <textarea type="text" class="form-control" id="pres" name="preskripsi"></textarea>
        <div id="pres-help" class="form-text">Data preskripsi anda tidak akan pernah dibagi dengan pihak lain
        </div>
      </div>
      <div class="mb-3">
        <label for="dokter" class="form-label">Nama Dokter</label>
        <input type="text" class="form-control" id="dokter" name="dokter">
        <div id="dokter-help" class="form-text">Bisa dikosongkan untuk obat OTC</div>
      </div>

      <div style="height: 30px;"></div>

      <h5>Informasi Pengiriman</h5>
      <div class="mb-3">
        <label for="provinsi" class="form-label">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi">
      </div>
      <div class="mb-3">
        <label for="kota" class="form-label">Kota</label>
        <input type="text" class="form-control" id="kota" name="kota">
      </div>
      <div class="mb-3">
        <label for="camat" class="form-label">Kecamatan</label>
        <input type="text" class="form-control" id="camat" name="camat">
      </div>
      <div class="mb-3">
        <label for="lurah" class="form-label">Kelurahan</label>
        <input type="text" class="form-control" id="lurah" name="lurah">
      </div>
      <div class="mb-3">
        <label for="desa" class="form-label">Desa</label>
        <input type="text" class="form-control" id="desa" name="desa">
      </div>
      <div class="mb-3">
        <label for="jalan" class="form-label">Jalan</label>
        <input type="text" class="form-control" id="jalan" name="jalan">
      </div>
      <div class="mb-3">
        <label for="pos" class="form-label">Kode Pos</label>
        <input type="text" class="form-control" id="pos" name="pos">
      </div>


      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="check">
        <label class="form-check-label" for="check">Peringati saya mengenai pengiriman melalui surel</label>
      </div>

      <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#order-confirmed">Submit</button>
    </form>
  </div>

  <div style="height: 40vh;"></div>

  <?php include 'footer.php' ?>
</body>

</html>