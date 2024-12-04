<?php
function check_roles($allowed_roles) {
  session_start();

  // Pastikan user sudah login dan memiliki role
  if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $allowed_roles)) {
      header('Location: login.php'); // Redirect jika tidak memiliki akses
      exit;
  }
}

require_once 'functions.php';
check_roles(['admin','visitor']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyful Travel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #009ada;">
  <div class="container-fluid">
  <a class="navbar-brand text-white" style="font-family:Arial;" href="index.php"><img src="img/logo1.png" width="60x" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php if ($_SESSION['role'] === 'admin'): ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="guest.php">Riwayat Reservasi</a>
        </li>
    <?php elseif ($_SESSION['role'] === 'visitor'): ?>
      <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">About</a>
        </li>
    <?php endif; ?>
      </ul>
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link text-white" onclick="return confirm('Anda Yakin Ingin Keluar?')" href="logout.php">Logout</a> 
      </li>
    </ul>
  </div>
</nav>

<div class="bg-light p-4 mb-1">
<div class="container p-3 my-3  bg-white">

<div class="card mb-3">
                <div class="card-header">
                    <img src="img/taoi.jpg" class="rounded mx-auto d-block" alt="foto"> 
                </div>
                <div class="card-body">
                    <div>
                        <h3 class="text-center">About Us</h3>
                    </div>
                    <div style="text-align:justify;">
                        <p>     Didirikan pada tahun 2024 dan dikelola oleh personel tidak berpengetahuan di industri ini, Joyful Travel adalah agen perjalanan ritel dan online fiksi yang menangani jenis perjalanan individu dan kelompok dengan distribusi penjualan yang sebagian besar berasal dari situs web dan media sosial.

Jtravel juga menawarkan paket liburan tematik fiksi terlengkap yang dibuat berdasarkan minat pelanggan, seperti: pesiar, bulan madu, aktif, liburan ski, mengemudi sendiri, Club Med, phototrip, dll. Dengan berbagai akomodasi mulai dari standar hingga mewah, kami menawarkan berbagai pilihan paket menarik yang tersedia di situs web kami dan juga paket yang disesuaikan berdasarkan permintaan klien.

Jtravel tidak terhubung dan didukung oleh Organisasi Pariwisata Nasional, Hotel dan resor, maskapai penerbangan, dan pemasok perjalanan manapun.Kami tidak memiliki Jaringan  di luar industri perjalanan yang memberi kami peluang menarik untuk menciptakan produk dan layanan unik untuk klien B2C.
</p>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
    </div>

</div>
</div>

<footer class="text-center text-white " style="background-color: #009ada;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2024 Copyright:
  <a class="text-white" href="http://localhost/travel1/index.php">Jtravel.com</a>
  </div>
  <!-- Copyright -->
</footer>

<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>