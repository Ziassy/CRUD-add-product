<?php
require 'koneksi.php';
$no = $_GET['no'];
$products = mysqli_query($conn, "SELECT * FROM printer WHERE no='$no'");
$row = mysqli_fetch_array($products);
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
            <h3 class="text-center">Edit Product</h3>
            <hr class="w-100 mr-auto">
            <form action="update.php" method="POST">
                <div class="form-group">
                    <label for="no">No</label>
                    <input type="text" class="form-control w-100" name="no" id="no" value="<?= $row['no']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" class="form-control w-100" name="merek" id="merek" value="<?= $row['nama_merek']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control w-100" name="nama" id="nama" value="<?= $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" class="form-control w-100" name="warna" id="warna" value="<?= $row['warna']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control w-100" name="jumlah" id="jumlah" value="<?= $row['jumlah']; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>