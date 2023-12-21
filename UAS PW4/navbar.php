<?php
  session_start();
  if (!isset($_SESSION["username"])) {
      header("Location: login.php");
      exit();
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg text-bg-primary navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Caritas Bangunan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form_input.php">Input Data</a>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="form_pembelian.php">Pembelian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form_penjualan.php">Penjualan</a>
              </li>

              <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Riwayat
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="riwayat_pembelian.php">Pembelian</a></li>
                            <li><a class="dropdown-item" href="riwayat_penjualan.php">Penjualan</a></li>
                        </ul>
                    </li>

            <li class="nav-item">
                <a class="nav-link disabled" href=""><?php echo $_SESSION["username"] ?></a>
            </li>

            <li class="nav-item">
               <button class="btn btn-danger">
                <a class="logout" href="logout.php">Keluar</a>
                </button>
            </li>

                </ul>
            </div>
        </div>
    </nav>
</body>
</html>