<?php
include 'koneksi.php';

$id_transaksi = $_GET['id_transaksi'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_barang = $_POST['id_barang'];
    $tanggal = $_POST['tanggal'];
    $total = $_POST['total'];

    $query = "UPDATE transaksi SET id_barang='$id_barang', tanggal='$tanggal', total='$total' WHERE id_transaksi='$id_transaksi'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    $query = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
</head>
<body>

<h2>Edit Transaksi</h2>

<form method="post" action="">
    ID Barang: <input type="number" name="id_barang" value="<?php echo $row['id_barang']; ?>" required><br><br>
    Tanggal: <input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" required><br><br>
    Total: <input type="number" name="total" value="<?php echo $row['total']; ?>" required><br><br>
    <input type="submit" value="Update">
</form>

<a href="index.php">Kembali</a>

</body>
</html>
