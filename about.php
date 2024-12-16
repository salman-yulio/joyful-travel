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
check_roles(['visitor']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyful Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  </head>
<body>
    
<?php include('navbar.php'); ?>

<div class="bg-light p-4 mb-1">
  <div class="container p-3 my-3 bg-white">
    <div class="card mb-3">
      <div class="card-header text-center">
        <img src="https://t3.ftcdn.net/jpg/01/28/44/76/360_F_128447604_6deYSrg6bgH2F3YaoU0icdhvxNu4ReDN.jpg" class="img-fluid rounded" alt="foto"> 
      </div>
      <div class="card-body">
        <h3 class="text-center">About Us</h3>
        <p class="text-justify">
          Didirikan pada tahun 2024 dan dikelola oleh personel tidak berpengetahuan di industri ini, Joyful Travel adalah agen perjalanan ritel dan online fiksi yang menangani jenis perjalanan individu dan kelompok dengan distribusi penjualan yang sebagian besar berasal dari situs web dan media sosial.
        </p>
        <p class="text-justify">
          Jtravel juga menawarkan paket liburan tematik fiksi terlengkap yang dibuat berdasarkan minat pelanggan, seperti: pesiar, bulan madu, aktif, liburan ski, mengemudi sendiri, Club Med, phototrip, dll. Dengan berbagai akomodasi mulai dari standar hingga mewah, kami menawarkan berbagai pilihan paket menarik yang tersedia di situs web kami dan juga paket yang disesuaikan berdasarkan permintaan klien.
        </p>
        <p class="text-justify">
          Jtravel tidak terhubung dan didukung oleh Organisasi Pariwisata Nasional, Hotel dan resor, maskapai penerbangan, dan pemasok perjalanan manapun. Kami tidak memiliki Jaringan di luar industri perjalanan yang memberi kami peluang menarik untuk menciptakan produk dan layanan unik untuk klien B2C.
        </p>
        <h3 class="text-center">Alamat Kantor: Jl. Siliwangi No. 27</h3>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
</div>

<footer class="text-center text-white" style="background-color: #009ada;">
  <div class="container p-4">
    <!-- Tambahkan konten tambahan jika diperlukan -->
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="http://localhost/travel1/index.php">Jtravel.com</a>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>