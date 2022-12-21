<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
  // session isn't started
  session_start();
}
$user_id = $_SESSION['id'];
?>
<!doctype html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php
  include 'nav.php';
  include 'config.php';

  $query = "SELECT * FROM obat WHERE `id_user` = '$user_id'";
  $exeQuery = mysqli_query($con, $query);

  if ($exeQuery->num_rows > 0) {
  ?>
  <div class="title-section container">
    <h1>Shopping <span class="red">Cart</span></h1>
    <hr>
  </div>
  <div class="container">
    <table class="table table-striped">
      <tr>
        <th>No</th>
        <th>Preskripsi</th>
        <th>Dokter</th>
        <th>Alamat</th>
        <th>Metode Pembayaran</th>
        <th>Tanggal Pemesanan</th>
        <th>Menu</th>
      </tr>
      <?php
    include './config.php';

    $i = 1;

    while ($data = mysqli_fetch_assoc($exeQuery)) {
      ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><?= $data['preskripsi'] ?></td>
        <td><?= $data['dokter'] ?></td>
        <td><?= $data['provinsi'] ?>,<?= $data['kota'] ?>,<?= $data['camat'] ?>,<?= $data['kode_pos'] ?></td>
        <td><?= $data['metode'] ?></td>
        <td><?= $data['date'] ?></td>
        <td class="btn-pad">
          <a onclick="return confirm('Apakah yakin anda ingin menghapus data')"
            href="hapus.php?id_transaksi=<?= $data['id_transaksi'] ?>" class="btn btn-sm del">Hapus</a>
          <a href="edit.php?s=edit&id_transaksi=<?= $data['id_transaksi'] ?>" class="btn btn-sm edit">Edit</a>
        </td>
      </tr>
      <?php
    }
      ?>
    </table>
  </div>
  <?php
  } else {
  ?>
  <div class="title-section container">
    <h1>Shopping <span class="red">Cart</span></h1>
    <hr>
  </div>
  <div class="container text-center no-item">
    <img src="./image/wrong.png" alt="">
    <h3>Belum Ada Item</h3>
  </div>
  <?php
  }
  ?>
</body>