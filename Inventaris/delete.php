<?php
include 'koneksi.php';

$id_transaksi = $_GET['id_transaksi'];

$query = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
