<?php
if ($_POST['id_transaksi']) {
    include 'config.php';
    $nim = $_GET['nim'];

    $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $execQuery = mysqli_query($conn, $query);


    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil dihapus');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal dihapus');
        window.location.href = 'index.php';
        </script>";
    }
} else {
    echo "No NIM";
}
