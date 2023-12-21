<?php
    include "koneksi.php";
    session_start();

    $username =$_POST['username'];
    $password =$_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($query);

    if($cek== true){
        $_SESSION['username'] = $username;
        header("location:index.php");
    } else {
        echo "<script> alert ('username dan password anda salah')</script>";
    }
?>