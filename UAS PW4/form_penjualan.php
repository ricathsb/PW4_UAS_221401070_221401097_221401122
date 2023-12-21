<?php
// Include file functions.php
require 'functions.php';
require 'navbar.php';

// Ambil data dari tabel 'ready'
$tanggalSaatIni = date("Y-m-d");
$queryReady = "SELECT * FROM ready ORDER BY nama";
$readyStocks = query($queryReady);

// Proses ketika formulir penjualan disubmit
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tanggalPenjualan = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];

    // Ambil data material dari tabel 'ready'
    $queryMaterial = "SELECT * FROM ready WHERE id = $id";
    $material = query($queryMaterial)[0];

    $nama = $material['nama'];
    $harga = $material['harga'];
    $satuan = $material['satuan'];

    // Kurangi jumlah di 'ready' jika cukup
    if ($material['jumlah'] >= $jumlah) {
        $newJumlah = $material['jumlah'] - $jumlah;

        // Update jumlah di 'ready'
        $queryUpdate = "UPDATE ready SET jumlah = $newJumlah WHERE id = $id";
        mysqli_query($conn, $queryUpdate);

        // Insert data penjualan ke 'riwayat'
        $queryPenjualan = "INSERT INTO penjualan (tanggal, nama, jumlah, harga) VALUES ('$tanggalPenjualan', '$nama', $jumlah, $harga)";
        mysqli_query($conn, $queryPenjualan);
     
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan</title>
</head>
<body>
    <div class="container">

        <h2>Form Penjualan</h2>
        
        <table class="table">
            <th>
                <form method="post">
                    <label for="material">Pilih Material</label>
                    <select class="form-select" name="id" id="material" required>
                        <?php foreach ($readyStocks as $stock): ?>
                            <option value="<?= $stock['id'] ?>"><?= $stock['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                        
                        <label for="tanggal">Tanggal Penjualan</label> <br>
                        <input class="form-control mb-3" type="date" name="tanggal" id="tanggal" value="<?php echo $tanggalSaatIni; ?>" required>              
                        <label for="jumlah">Masukkan Jumlah</label> <br>
                        <input class="form-control mb-3" type="number" name="jumlah" id="jumlah" required>
                        <button class="btn btn-success" name="submit" type="submit">Sumbit</button>
                    </form>
                </th>
            </table>     
    </div>
</body>
</html>
