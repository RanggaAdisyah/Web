<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_barang = $_POST['id_barang'];
    $tanggal = $_POST['tanggal'];
    $total = $_POST['total'];

    $query = "INSERT INTO transaksi (id_barang, tanggal, total) VALUES ('$id_barang', '$tanggal', '$total')";
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
</head>
<body>

<h2>Tambah Transaksi</h2>

<form method="post" action="">
    ID Barang: <input type="number" name="id_barang" required><br><br>
    Tanggal: <input type="date" name="tanggal" required><br><br>
    Total: <input type="number" name="total" required><br><br>
    <input type="submit" value="Tambah">
</form>

<a href="index.php">Kembali</a>

</body>
</html>
