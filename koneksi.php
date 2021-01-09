<?php
$domain = 'localhost';
$user = 'root';
$password = '';
$database = 'barang_vsga';

$conn = mysqli_connect($domain, $user, $password, $database);
if (!$conn) {
    die('Connection failed:' . mysqli_connect_error());
}
