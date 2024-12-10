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


<div class="container-xxl">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fprod1-api.goldenrama.com%2Fuploads%2FAussie_cf4f3bea1a.jpg&w=1920&q=75" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Australia: Negeri Eksotis yang Memikat</h5>
            <p>Jelajahi pesona Australia dengan pantai eksotis, satwa unik, dan kota modern</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="img/2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Finlandia: Keajaiban Nordik yang Menawan</h5>
            <p>Aurora borealis, lanskap salju, dan budaya Nordik yang memukau</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="img/1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Jepang: Negeri Matahari Terbit</h5>
            <p>Bunga sakura, bunga khas dari Jepang yang sangat indah.</p>
          </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>

<div class="bg-light p-3 mb-2">
<div class="container p-3 my-3  bg-white"><h1 class="text-center mt-5" style="color:#009ada;">Penawaran Spesial untuk Anda, <?php echo $_SESSION['user']; ?></h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card mt-5 mx-auto" style="width: 15rem; ">
                <img src="https://www.aeccglobal.co.id/images/2022/06/02/aus.webp" class="card-img-top border" height="250" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Australia</h4>
                        <p class="card-text">Sebagai benua terkecil di dunia, Australia memiliki enam negara bagian dan dua teritorial yang merupakan bagian dari negara persemakmuran, yaitu Australia Selatan. . .</p>
                        <a href="rooms-aus.php" class="btn btn-primary">More About</a>
                    </div>
            </div>
        </div>

<div class="col-md-4">
            <div class="card mt-5 mx-auto" style="width: 15rem; ">
                <img src="https://images.ctfassets.net/szez98lehkfm/6BMujuvqFf4d8yuEhO5Fi/3dc32c14eb358d82280ee96b6fc5c287/MyIC_Inline_26506" class="card-img-top border" height="250" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Finlandia</h4>
                        <p class="card-text">Selama beberapa tahun, Finlandia menempati peringkat pertama sebagai negara paling bahagia di dunia. Negara yang ibu kotanya berlokasi di Helsinki ini juga dikenal dengan. . .</p>
                        <a href="rooms-fin.php" class="btn btn-primary">More About</a>
                    </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card mt-5 mx-auto" style="width: 15rem; ">
                <img src="https://cdn1-production-images-kly.akamaized.net/qldsLLBSUwdi_HzBAXa8b38RDNE=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/929263/original/063183400_1436934636-1.jpg" class="card-img-top border" height="250" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Jepang</h4>
                        <p class="card-text">Jepang adalah sebuah negara kepulauan di Asia Timur yang terbagi menjadi empat pulau utama, yaitu Hokkaido, Honshu (pulau terbesar), Shikoku, dan Kyushu. Negara yang. . .</p>
                        <a href="rooms-jpn.php" class="btn btn-primary">More About</a>
                    </div>
            </div>
        </div>

</div>
</div>
</div>

<footer class="text-center text-white" style="background-color: #009ada;">
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