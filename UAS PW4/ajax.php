<?php
include "functions.php";

$id = $_POST['id'];
$func = $_POST['func'];

    echo "
    <form method='post' action='index.php'>
        <input type='hidden' value='$id' name='id'>
        <input type='number' autofocus name='jumlah'>
        <button class='btn btn-success' type='submit' name='submit'>Ubah</button>
    </form>
    ";

?>