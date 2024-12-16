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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>