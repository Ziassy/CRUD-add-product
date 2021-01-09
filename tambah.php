<?php
require 'koneksi.php';
function insertPrinter($merek, $nama, $warna, $jumlah)
{
    global $conn;
    $merek = mysqli_escape_string($conn, $merek);
    $nama = mysqli_escape_string($conn, $nama);
    $warna = mysqli_escape_string($conn, $warna);
    $jumlah = (int)$jumlah;

    $sql = "INSERT INTO printer (nama_merek, nama, warna, jumlah) VALUES ('$merek', '$nama', '$warna', '$jumlah')";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header('location:index.php');
        die();
    } else {
        echo mysqli_error($conn);
        mysqli_close($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    insertPrinter($_POST['merek'], $_POST['nama'], $_POST['warna'], $_POST['jumlah']);
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 11</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>


<body>
    <main role="main" class="container mt-5">
        <div class="komentar my-5 mb-5">
            <h3 class="text-center">Add Product</h3>
            <hr class="w-100 mr-auto">
            <form action="" method="POST" onsubmit="insertPrinter()">
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control w-100" name="merek" id="merek" placeholder="merek" required>
                </div>
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control w-100" name="nama" id="nama" placeholder="nama" required>
                </div>
                <div class="form-group">
                    <label for="warna">warna</label>
                    <input type="text" class="form-control w-100" name="warna" id="warna" placeholder="warna" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">jumlah</label>
                    <input type="number" class="form-control w-100" name="jumlah" id="jumlah" placeholder="jumlah" required>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
                <input class="btn btn-danger" type="reset" value="Reset">
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>