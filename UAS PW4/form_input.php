<?php
// Include file functions.php
require 'functions.php';
require 'navbar.php';
// Proses ketika formulir disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];

    // Insert data into 'stok' table
    $queryStok = "INSERT INTO stok (nama, harga, satuan) VALUES ('$nama', $harga, '$satuan')";
    mysqli_query($conn, $queryStok);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Input Data</title>
</head>
<body>
   
    <div class="container">

        <h2>Form Input Data</h2>
        <table class="table text center">
            <th> <form method="post">
            <div class="form-floating">
                <input type="text" name="nama" requred class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea"></input>
                <label for="floatingTextarea">Nama Barang</label>
            </div>

            <div class="form-floating">
                <input type="number" name="harga" required  class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea"></input>
                <label for="floatingTextarea">Harga</label>
            </div>

            <div class="form-floating">
                <input type="text" name="satuan" required  class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea"></input>
                <label for="floatingTextarea">Satuan</label>
            </div>
            

                
                <button class="btn btn-success" name="submit" type="submit">Simpan</button>
            </form>
        </th>
    </table>
    
    </div>

</body>
</html>
