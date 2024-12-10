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
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #009ada;">
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
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.php">Contact</a>
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
<br>
    <!-- Contact Section -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Contact Us</h1>
        <div class="row justify-content-center">
            <!-- Instagram -->
            <div class="col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-instagram" style="font-size: 2rem; color: #E1306C;"></i>
                        <h5 class="card-title mt-2">Instagram</h5>
                        <p class="card-text">@joyfultravel</p>
                        <a href="https://instagram.com/joyfultravel" target="_blank" class="btn btn-primary">Follow</a>
                    </div>
                </div>
            </div>
            <!-- WhatsApp -->
            <div class="col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-whatsapp" style="font-size: 2rem; color: #25D366;"></i>
                        <h5 class="card-title mt-2">WhatsApp</h5>
                        <p class="card-text">+62 812 3456 7890</p>
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success">Chat Now</a>
                    </div>
                </div>
            </div>
            <!-- Email -->
            <div class="col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-envelope" style="font-size: 2rem; color: #007BFF;"></i>
                        <h5 class="card-title mt-2">Email</h5>
                        <p class="card-text">joyfultravel@gmail.com</p>
                        <a href="mailto:joyfultravel@gmail.com" class="btn btn-primary">Send Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer class="text-center text-white fixed-bottom" style="background-color: #009ada;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="#">Jtravel.com</a>
  </div>
  <!-- Copyright -->
</footer>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>