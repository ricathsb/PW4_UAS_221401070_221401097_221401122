<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      include 'koneksi.php';
      session_start();
      
      if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
        header('location: /');
      }

      if(isset($_POST['submit'])) {
        /**
         * Mendapatkan data dari formulir pendaftaran.
         * Data: Email, Kata Sandi, Nama Lengkap, dan NIM.
         */
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        if(empty($username) || empty($password)) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo '<b>Warning!</b> Silahkan isi data yang diperlukan.';
        } elseif(count((array) $koneksi->query('SELECT * FROM user WHERE username = "'.$username.'" OR email = "'.$email.'"')->fetch_array()) > 1) {
          /**
           * Cek jika email atau NIM telah terdaftar.
           */
          echo '<b>Warning!</b> Username atau Email telah terdaftar.';
        } else {
          /**
           * Memasukkan data ke database.
           */
          $insert = $koneksi->query('INSERT INTO `user`(`username`, `email`, `password`) VALUES("'.$username.'", "'.$email.'", "'.$password.'")');
          if($insert) {
            header("location:login.php");
          } else {
            echo 'Pendaftaran gagal!';
          }
        }
      }
    ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h1>Halaman Register</h1>
                </div>
                <div class="card-body">
                    <form method="post">        
                        <div class="mb-3">
                            <label  class="form-label">Username :</label>
                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email :</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password :</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" value="register" name="submit" >Register</button>
                        </div>
                    </form>
                </div>
                <div>
                    <a class="login-link" href="login.php">sudah punya akun?</a>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
  </body>
</html>