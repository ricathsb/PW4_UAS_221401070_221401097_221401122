<?php
// Include file functions.php
require 'functions.php';
require 'navbar.php';
// Ambil data dari tabel 'riwayat'
$queryRiwayat = "SELECT * FROM riwayat ORDER BY tanggal DESC";
$riwayat = query($queryRiwayat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian</title>
</head>
<body>
<div class="container">
    <header class="text-center my-3">
        <h2>Riwayat Pembelian</h2>
    </header>
    <table class="table table-bordered">
        <thead class="text-center table-primary">
            <tr>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        
        <tbody class="table-secondary">
            <?php foreach ($riwayat as $data): ?>
                <tr>
                    <td class="text-center"><?= $data['tanggal'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td>Rp.<?= $data['harga'] ?></td>
                    <td><?= $data['jumlah'] ?></td>
                    <td>Rp.
                        <?php
                $harga = $data['harga'];
                $jumlah = $data['jumlah'];
                $totalHarga = $harga * $jumlah;
                echo $totalHarga;
                ?>,
                ,-</td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    
</div>
</body>
</html>
