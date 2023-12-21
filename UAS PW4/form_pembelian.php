<?php
// Include file functions.php
require 'functions.php';
require 'navbar.php';
// Ambil data dari tabel 'stok'
$queryStok = "SELECT * FROM stok ORDER BY nama";
$stocks = query($queryStok);

// Proses ketika formulir disubmit
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $jumlah = $_POST['jumlah'];

    // Ambil data material dari tabel 'stok'
    $queryMaterial = "SELECT * FROM stok WHERE id = $id";
    $material = query($queryMaterial)[0];

    $nama = $material['nama'];
    $harga = $material['harga'];
    $satuan = $material['satuan'];

    // Cek apakah material sudah ada di 'ready'
    $queryCheck = "SELECT * FROM ready WHERE nama = '$nama'";
    $existingMaterial = query($queryCheck);

    if (empty($existingMaterial)) {
        // Jika material belum ada, tambahkan ke 'ready'
        $queryReady = "INSERT INTO ready VALUES ('', '$nama', $harga, '$satuan', $jumlah)";
        mysqli_query($conn, $queryReady);
    } else {
        // Jika material sudah ada, update jumlah di 'ready'
        $currentJumlah = $existingMaterial[0]['jumlah'];
        $newJumlah = $currentJumlah + $jumlah;

        $queryUpdate = "UPDATE ready SET jumlah = $newJumlah WHERE nama = '$nama'";
        mysqli_query($conn, $queryUpdate);
    }

    // Insert data into 'riwayat' table
    $tanggalPembelian = date("Y-m-d");
    $queryRiwayat = "INSERT INTO riwayat (tanggal, nama, jumlah, harga) VALUES ('$tanggalPembelian', '$nama', $jumlah, $harga)";
    mysqli_query($conn, $queryRiwayat);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Pembelian</title>
</head>
<body>

<div class="container">
    <h2>Form Pembelian</h2>
    
    <table class="table">
        <th> 
            <form method="post">
            <label for="material">Pilih Material</label>
            <select class="form-select mb-3" name="id" id="material" required>
                <?php foreach ($stocks as $stock): ?>
                    <option value="<?= $stock['id'] ?>"><?= $stock['nama'] ?></option>
                <?php endforeach ?>
            </select>

            <label for="jumlah">Masukkan Jumlah</label> <br>
            <input class="form-control mb-3" type="number" name="jumlah" id="jumlah" required>

            <button class="btn btn-success" name="submit" type="submit">Simpan</button>
            </form>
        </th>
    </table>
   
</div>
</body>
</html>

