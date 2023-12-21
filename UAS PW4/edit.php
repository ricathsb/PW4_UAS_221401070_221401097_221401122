<?php

include "functions.php";
include "navbar.php";
if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $jumlah = $_POST['jumlah'];

    $query = "UPDATE stok SET nama='$nama', harga=$harga, satuan='$satuan', jumlah=$jumlah WHERE nama=$nama";
    mysqli_query($conn,$query);
    header("Location: berhasil.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit data</title>
</head>
<body>
<h2>Edit Data</h2>

</body>
</html>