<?php
$koneksi = mysqli_connect("localhost", "root", "", "pertemuan5_07607");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>