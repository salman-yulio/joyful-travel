<?php

function check_roles($allowed_roles) {
  session_start();

  // Pastikan user sudah login dan memiliki role
  if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $allowed_roles)) {
      header('Location: login.php'); // Redirect jika tidak memiliki akses
      exit;
  }
}

require 'functions.php';
check_roles(['visitor']);

if (isset($_POST["submit"])){
  // buat test
  // var_dump($_POST);
  //mysqli_error();

  //alert
  if (create($_POST)>0){
      echo
      "<script>
          alert('Pemesanan sedang diproses, harap cek inbox whatsapp secara berkala untuk informasi lebih lanjut');
          document.location.href = 'rooms-aus.php';
      </script>";
  }
  else{
      echo 
      "<script>
          alert('Pemesanan Gagal');
          document.location.href = 'rooms-aus.php';
      </script>";
  }
}

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

<div class="bg-light p-3 mb-2">
<div class="container p-3 my-3  bg-white">
<form action="" method="post" class="row g-3 needs-validation p-4">
  <div class="col-md-3">
    <label for="nama" class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" id="nama" required>
  </div>
  <div class="col-md-3">
    <label for="jml" class="form-label">Destinasi</label>
    <select name="jml" class="form-select" id="jml" required>
      <option selected disabled value="">Choose...</option>
      <option selected>Australia Paket 1</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="cekin" class="form-label">Tanggal Keberangkatan</label>
    <input name="cekin" type="date" class="form-control" id="cekin" required>
  </div>

  <div class="col-md-3">
    <label for="no" class="form-label">No Hp</label>
    <input name="no" type="no" class="form-control" id="no" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    <a href="rooms-aus.php" class="btn btn-primary">Batal</a>
  </div>
</form>
</div>
</div>

<footer class="text-center text-white fixed-bottom" style="background-color: #009ada;">
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