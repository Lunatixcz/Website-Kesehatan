<!DOCTYPE html>
<html lang = "en">
    <?php include 'meta.php'?>

    <body>

        <?php
        $id = $_GET['id_transaksi'];
        include 'config.php';
        include 'nav.php';

        $query = "SELECT * FROM obat WHERE id_transaksi='$id'";
        $execQuery = mysqli_query($con, $query);

        $data = mysqli_fetch_assoc($execQuery);
        ?>

        <div class="title-section container">
            <h1>Edit <span class="red">Order</span></h1>
            <hr>
        </div>

        <div class="container edit-section">
            <div id="order-form">
                <form action="./edit-act.php?id_transaksi=<?=$data['id_transaksi']?> " method="POST">
                <h5>Informasi Medis</h5>
                <div class="mb-3">
                    <label for="pres" class="form-label">Preskripsi</label>
                    <input type="text" class="form-control" id="pres" name="preskripsi" value="<?=$data['preskripsi']?>" readonly>
                    <div id="pres-help" class="form-text">Data preskripsi anda tidak akan pernah dibagi dengan pihak lain
                    </div>
                </div>
                <div class="mb-3">
                    <label for="dokter" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" id="dokter" name="dokter" value="<?=$data['dokter']?>" readonly>
                    <div id="dokter-help" class="form-text">Bisa dikosongkan untuk obat OTC</div>
                </div>

                <div style="height: 30px;"></div>

                <h5>Informasi Pengiriman</h5>
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?=$data['provinsi']?>">
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label"  >Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="<?=$data['kota']?>">
                </div>
                <div class="mb-3">
                    <label for="camat" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="camat" name="camat" value="<?=$data['camat']?>">
                </div>
                <div class="mb-3">
                    <label for="pos" class="form-label" >Kode Pos</label>
                    <input type="text" class="form-control" id="pos" name="pos"value="<?=$data['kode_pos']?>">
                </div>

                <h5>Metode Pembayaran</h5>
                <div class="mb-3">
                    <label class="form-label">Pilih Metode Pembayran</label>
                    <select class="form-select" id="metode" name="metode" required>
                    <option value="Debit/Credit">Debit/Credit</option>
                    <option value="M-Banking">M-Banking</option>
                    <option value="Transfer ATM">Transfer ATM</option>
                    <option value="COD">COD</option>
                    </select>
                </div>

                <button type="submit" class="btn" data-bs-toggle="modal"
                    data-bs-target="#order-confirmed" style="width: auto;">Submit</button>
                </form>
            </div>
            <div style="height: 40vh;"></div>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>