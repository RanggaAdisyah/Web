<?php
include 'koneksi.php';
$query = "SELECT * FROM transaksi";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Transaksi</h2>

<a href="tambah.php">Tambah Transaksi</a><br><br>

<table>
    <tr>
        <th>ID Transaksi</th>
        <th>ID Barang</th>
        <th>Tanggal</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_transaksi'] . "</td>";
        echo "<td>" . $row['id_barang'] . "</td>";
        echo "<td>" . $row['tanggal'] . "</td>";
        echo "<td>" . $row['total'] . "</td>";
        echo "<td>
                <a href='edit.php?id_transaksi=" . $row['id_transaksi'] . "'>Edit</a> | 
                <a href='delete.php?id_transaksi=" . $row['id_transaksi'] . "'>Delete</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

<?php
mysqli_free_result($result);
mysqli_close($koneksi);
?>
