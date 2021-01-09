<?php
require 'koneksi.php';

function selectPrinter()
{
    global $conn;
    $sql = "SELECT * FROM printer";
    $result = mysqli_query($conn, $sql);
    $out_str = '';

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $out_str .= '
            <tr>
            <th scope="row">' . $row['no'] . '</th>
            <td>' . $row['nama_merek'] . '</td>
            <td>' . $row['nama'] . '</td>
            <td>' . $row['warna'] . '</td>
            <td>' . $row['jumlah'] . '</td>
            <td><a href="edit.php?no=' . $row['no'] . '" class="badge badge-primary">Edit</a></td>
            <td><a href="delete.php?no=' . $row['no'] . '" class="badge badge-danger">Hapus</a></td>
            </tr>
            ';
        }
    } else {
        echo "0  results";
    }
    mysqli_close($conn);
    return $out_str;
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
        <div class="row mb-4">
            <div class="col-md-5"></div>
            <div class="col-md-6">
                <h2>Daftar Barang</h2>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row mb-4">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a class="btn btn-primary" href="tambah.php" role="button">Tambah Produk</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Merek</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= selectPrinter(); ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>