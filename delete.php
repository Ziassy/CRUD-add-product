<?php
require 'koneksi.php';
$no = $_GET['no'];
$query = "DELETE FROM printer WHERE no='$no'";
mysqli_query($conn, $query);
header("location:index.php");
