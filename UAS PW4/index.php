<?php
include 'functions.php';
require 'navbar.php';
$query = "SELECT * FROM ready ORDER BY nama";
$stocks = query($query);
$i = 1;
if(isset($_POST['submit'])) {
    unset($_POST['submit']);
    $jumlah = $_POST['jumlah'];
    $id = $_POST['id'];
    $query = "UPDATE ready SET jumlah = $jumlah WHERE id = $id";
    mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) > 0) {
        echo "<script> location.reload(); </script>";    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="text-center my-2">
        <h1> Pengisian Stok Barang Bahan Bangunan</h1>
    </header>
    
    <div class="container">

        <table class="table table-bordered text-center table-hover">
            <tr class="table-primary">
                <th>Nomor</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th> </th>
            </tr>
            <?php foreach($stocks as $stock):?>
                <tr class="table-secondary">
                    <td><?= $i ?></td>
                    <td><?= $stock['nama'] ?></td>
                    <td class="text-start">Rp.<?= $stock['harga'] ?>,-</td>
                    <td><?= $stock['satuan'] ?></td>
                    <td id="td-<?= $stock['id'] ?>" class="button-edit"><span id="stock-<?= $stock['id'] ?>"><?= $stock['jumlah'] ?></span></td>
                    <td class="text-start">Rp.
                        <?php
            $harga = $stock['harga'];
            $jumlah = $stock['jumlah'];
            $totalHarga = $harga * $jumlah;
            echo $totalHarga;
            ?>,
            ,-</td>
            <td><button class="btn btn-primary" onclick="edit(<?= $stock['id'] ?>)">Edit</button></td>
        </tr>
        <?php $i++; endforeach ?>
    </table>
</div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function edit(id) {
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: {id: id, func: 'edit'},
                success: function(result) {
                    $("#td-" + id).html(result);
                }
            })
        }
    </script>
</body>
</html>