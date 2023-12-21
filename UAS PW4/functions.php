<?php
$host = "sql303.infinityfree.com"; // Ganti sesuai dengan host MySQL Anda
$username = "if0_35647734"; // Ganti sesuai dengan username MySQL Anda
$password = "ibbfs6HjFaje1"; // Ganti sesuai dengan password MySQL Anda
$database = "if0_35647734_uas_basdat"; // Ganti sesuai dengan nama database Anda

$conn = mysqli_connect($host, $username, $password, $database);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function minus($id) {
    global $conn;
    $query = "SELECT * FROM ready WHERE id = $id";
    $result = query($query)[0];
    $jumlah = (int) $result['jumlah'];
    $jumlah--;
    $query = "UPDATE ready SET jumlah = $jumlah WHERE id = $id";
    mysqli_query($conn, $query);

    $query = "SELECT * FROM ready WHERE id = $id";
    $result = query($query)[0];
    $jumlah = (int) $result['jumlah'];

    echo $jumlah;
}

function plus($id) {
    global $conn;
    $query = "SELECT * FROM ready WHERE id = $id";
    $result = query($query)[0];
    $jumlah = (int) $result['jumlah'];
    $jumlah++;
    $query = "UPDATE ready SET jumlah = $jumlah WHERE id = $id";
    mysqli_query($conn, $query);

    $query = "SELECT * FROM ready WHERE id = $id";
    $result = query($query)[0];
    $jumlah = (int) $result['jumlah'];

    echo $jumlah;
}


?>