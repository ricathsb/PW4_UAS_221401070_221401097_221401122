<?php
    $host="sql303.infinityfree.com";
    $user="if0_35647734";
    $pass="ibbfs6HjFaje1";
    $name="if0_35647734_uas_basdat";

    $koneksi =mysqli_connect($host,$user,$pass) or die ("Anda gagal menghubungkan ke database");
    mysqli_select_db($koneksi,$name);
?>