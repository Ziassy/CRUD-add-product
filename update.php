<?php
require 'koneksi.php';

$no = $_POST['no'];
$merek = $_POST['merek'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

echo $query = "UPDATE printer SET nama_merek='$merek', nama='$nama', warna='$warna', jumlah='$jumlah' WHERE no='$no'";
mysqli_query($conn, $query);
header("location:index.php");
