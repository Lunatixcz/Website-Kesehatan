<?php
if ($_GET['id_transaksi']) {
    include 'config.php';
    $id= $_GET['id_transaksi'];

    $query = "DELETE FROM obat WHERE id_transaksi = '$id'";
    $execQuery = mysqli_query($con, $query);

    echo '<script>window.location.replace("./cart.php?s=cart");</script>';
    
} else {
    echo "No Transaction";
}
