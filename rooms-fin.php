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

<div class="bg-light p-4 mb-2">
<div class="container p-3 my-3  bg-white">
<div class="d-flex justify-content-between">

    <!-- <div>
        <h3>Finlandia</h3>
        <hr>
    </div> -->

    <!-- <form action="" class="d-flex p-2">
        <input type="search" class="form-control me-2 p-1 m-1" placeholder="Search">
        <button class="btn btn-sml btn-primary p-1 m-1 text-white">Search</button>
    </form> -->
    <br>

</div>


   <div class="row">
   <div>
    <h1>Finlandia</h1>
    <p class="fs-5">Selama beberapa tahun, Finlandia menempati peringkat pertama sebagai negara paling bahagia di dunia. Negara yang ibu kotanya berlokasi di Helsinki ini juga dikenal dengan kualitas pendidikan terbaik serta memiliki alam yang menakjubkan. Salah satu destinasi ternamanya adalah Lapland, di mana pengunjung dapat menyaksikan fenomena aurora yang memukau.</p>
    </div>

    <div class="card mb-3">
                <div class="card-header">
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2F4d946690ab9f15b848fce229cc5c3953.jpg&w=1920&q=75" class="rounded mx-auto d-block"alt="" height="500px"> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>PAKET TOUR 1 FINLANDIA
FAVORITE ROVANIEMI KAKSLAUTTANEN GLASS IGLOO + AURORA HUNTING & KING CRAB SAFARI
</h3>
                    </div>
                    <div>
                        <p><b>
                        Harga Tour: IDR 52.988.000/pax
                        </b></p>
                    </div>
                    <div>
                        <p>✈ TURKISH AIRLINES
                          <br>
                          🏨 10 HARI
                          <br>
                          🌃 2 NEGARA
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                    <a href="reservasi-fin1.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a>
                    <!-- Button trigger modal -->
 <button type="button" class="btn btn-sml btn-primary p-1 m-1 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <b>Detail Perjalanan</b>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Itinerary Perjalanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<p>
Hari 1
<br>
JAKARTA – ISTANBUL
<br>
Anda diharapkan berkumpul di Bandara International Soekarno Hatta untuk memulai perjalanan wisata keliling Eropa dengan kota tujuan pertama Helsinki, Finlandia.
</p>

<p>
Hari 2
<br>
ISTANBUL – HELSINKI
<br>
Setibanya di Helsinki-Vantaa International Airport, Anda akan diajak untuk menikmati keindahan dan ketenangan kotanya dengan kunjungan ke Senate Square, alun-alun kota utama dimana terdapat Helsinki Cathedral yang merupakan ikon kota Helsinki dan melewati Parliament House.
</p>

<p>
  Hari 3
  <br>
  HELSINKI – PORVO – HELSINKI – ROVANIEMI
  <br>
  Anda akan diajak mengunjungi Porvoo, kota tertua kedua di Finlandia yang menawan dengan rumah-rumah tua di jalan-jalan berbatu sebagai restoran, cafe, toko kerajinan tangan. Malam hari Anda akan diantar ke stasiun kereta untuk melanjutkan perjalanan ke Rovaniemi, Ibukota Lapland.
</p>

<p>
  Hari 4
  <br>
  ROVANIEMI
  <br>
  Setibanya, Anda akan diajak untuk mengunjungi Santa Claus Village, tempat dimana Anda dapat foto bersama Santa Claus, juga mengirimkan postcard dengan cap pos kutub utara di kantor pos natal. Anda akan mendapatkan sertifikat sebagai bukti Anda telah menginjakkan kaki di benua paling utara di bumi.
</p>

<p>
  Hari 5
  <br>
  ROVANIEMI (FREE PROGRAM)
  <br>
  Hari ini, Anda mempunyai kesempatan untuk menikmati suasana kota Rovaniemi dan mengikuti acara tambahan (optional tour) kunjungan ke Reindeer Farm.
</p>

<p>
  Hari 6
  <br>
  ROVANIEMI – KAKSLAUTTANEN
  <br>
  Acara hari ini, Anda akan menuju Saariselka. Disini, Anda akan diajak untuk mengendarai Dog Sledge (kereta yang ditarik anjing Husky). Dan bermalam di Igloo Cabin, rumah tradisional Igloo yang terbuat dari kaca. Malam harinya Anda akan diajak untuk melakukan aktifitas Aurora hunting dengan menggunakan bus.
</p>

<p>
  Hari 7
  <br>
  KAKSLAUTTANEN – KIRKENES
  <br>
  Anda akan diajak untuk menikmati Artic King Crab Tour dimana Anda akan melihat proses penangkapan king crab di tengah danau yang beku (apabila situasi dan kondisi memungkinkan) dan menikmati hasil tangkapan dengan pemandangan hamparan salju. Setelah itu Anda akan diajak untuk mengunjungi Snow Hotel untuk melihat hotel yang terbuat dari es.
</p>

<p>
  Hari 8
  <br>
  KIRKENES – OSLO
  <br>
  Anda akan melakukan penerbangan menuju Ibukota Norwegia, Oslo. Setibanya di Oslo, Anda akan diajak berbelanja di daerah Karl Johans Gate Steet. Setelahnya Anda akan diantar menuju hotel untuk beristirahat.
</p>

<p>
  Hari 9
  <br>
  OSLO – ISTANBUL
  <br>
  Waktu bebas sampai tiba waktunya Anda diantar menuju Airport untuk menempuh perjalanan kembali ke tanah air tercinta, Indonesia.
</p>

<p>
  Hari 10
  <br>
  ISTANBUL – JAKARTA
  <br>
  Tiba di Jakarta dengan penuh kenangan yang indah. Kami mengucapkan terima kasih atas partisipasi anda dalam program perjalanan wisata bersama Kami.
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>
                </div>
                </div>
    </div>

    <div class="card mb-3">
                <div class="card-header">
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2Fc394deb4289f40c59994aa6bbd9c8968.jpg&w=1920&q=75" class="rounded mx-auto d-block"alt="" height="500px"> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>
                          PAKET TOUR 2 FINLANDIA SIGNATURE ROVANIEMI ARCTIC CIRCLE + KAKSLAUTTANEN GLASS IGLOO & NORTHERN NORWAY KING CRAB SAFARI
                        </h3>
                    </div>
                    <div>
                        <p><b>
                        Harga Tour: IDR 85.988.000/pax 
                        </b></p>
                    </div>
                    <div>
                        <p>✈ SINGAPORE AIRLINES
                          <br>
                          🏨 12 HARI
                          <br>
                          🌃 3 NEGARA
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                    <a href="reservasi-fin2.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a>
                    <!-- Button trigger modal -->
 <button type="button" class="btn btn-sml btn-primary p-1 m-1 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal1">
    <b>Detail Perjalanan</b>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal1Label">Itinerary Perjalanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <p>
    Hari 1
    <br>
    JAKARTA – SINGAPORE 
    <br>
    Anda diharapkan berkumpul di Bandara Internasional Soekarno-Hatta untuk memulai perjalanan wisata menuju kota tujuan pertama Copenhagen, Denmark via Singapore.
    </p>
    
    <p>
    Hari 2
    <br>
    SINGAPORE – COPENHAGEN – MALMO – COPENHAGEN
    <br>
    Anda akan langsung diajak menuju kota Malmo yang terletak di negara Swedia bagian selatan untuk city tour melewati Turning Torso, Malmo Castle, Town Hall, St. Peter’s Church serta Sodergatan Pedestrian Street. Kemudian kembali ke kota Copenhagen untuk berfoto dengan The Little Mermaid yang merupakan ikon kota Copenhagen, Nyhavn yang merupakan area waterfront berusia 4 abad yang kini dipenuhi bar dan restaurant serta melewati City Hall, Christianborg Palace, dan Amelienborg Palace. Selesai acara Anda akan diantar menuju hotel untuk beristirahat.
    </p>

    <p>
      Hari 3
      <br>
    COPENHAGEN – HELSINKI – ROVANIEMI (BY FLIGHT) (AURORA CHANCE)
      <br>
      Anda akan diantar menuju bandara untuk penerbangan menuju kota Rovaniemi yang merupakan ibukota Lapland. Malam hari, Anda akan diajak mengikuti aktivitas seru Aurora Hunting by Snow Mobile dimana Anda berkesempatan melihat Aurora Borealis (Aurora Borealis merupakan fenomena alam yang dapat diprediksi namun tidak dapat dipastikan, sehingga bisa saja tidak tampak atau tidak terlihat, bergantung kepada kondisi cuaca setempat). Selesai acara Anda akan diantar menuju hotel untuk beristirahat.
    </p>

    <p>
      Hari 4
      <br>
    ROVANIEMI (AURORA CHANCE) 
      <br>
      Anda akan diantar menuju Santa Claus Village tempat yang terkenal sebagai kampung halaman resmi Santa Claus, Anda dapat berfoto bersama Santa Claus dan juga mengirimkan kartu pos dengan cap pos serta perangko kutub utara di Santa’s Post Office. Anda juga akan mendapatkan sertifikat sebagai bukti bahwa Anda telah menginjakkan kaki di Arctic Circle atau Lingkar Arctic.
    </p>

    <p>
      Hari 5
      <br>
    ROVANIEMI – KAKSLAUTTANEN (AURORA CHANCE) 
      <br>
      Perjalanan Anda hari ini dilanjutkan menuju Kakslauttanen Arctic Resort tempat dimana Anda akan bermalam di dalam rumah tradisional Igloo yang terbuat dari kaca (Large Glass Igloo). Anda akan diajak untuk mengikuti aktivitas seru Aurora Hunting by Bus dimana Anda berkesempatan melihat Aurora Borealis (Aurora Borealis merupakan fenomena alam yang dapat diprediksi namun tidak dapat dipastikan, sehingga bisa saja tidak tampak atau tidak terlihat, bergantung kepada kondisi cuaca setempat). Selesai acara Anda akan diantar menuju hotel untuk beristirahat.
    </p>

    <p>
      Hari 6
      <br>
    KAKSLAUTTANEN – KIRKENES (AURORA CHANCE)
      <br>
      Acara hari ini dimulai dengan mengikuti aktivitas Reindeer Sleigh pengalaman menaiki kereta yang ditarik Rusa Kutub (Bergantung kepada kondisi dan cuaca setempat). Setelah itu Anda akan diantar menuju Kirkenes yang berada di negara Norwegia dengan menggunakan bus. Sesampainya disana, Anda akan diantar untuk mengunjungi Snow Hotel untuk melihat hotel yang terbuat dari es. 

    </p>

    <p>
      Hari 7
      <br>
    KIRKENES – KARASJOK (AURORA CHANCE) 
      <br>
      Anda akan langsung diantar untuk mengikuti Arctic King Crab Safari (Apabila situasi dan kondisi memungkinkan) dimana Anda akan melihat proses penangkapan King Crab dan menikmati hasil tangkapan tersebut. Setelah itu, Anda akan diantar menuju Karasjok kota yang terkenal sebagai pusat budaya Suku Sami untuk bermalam.

    </p>

    <p>
      Hari 8
      <br>
    KARASJOK – ALTA (AURORA CHANCE) 
      <br>
      Anda akan melakukan penerbangan menuju Ibukota Norwegia, Oslo. Setibanya di Oslo, Anda akan diajak berbelanja di daerah Karl Johans Gate Steet. Setelahnya Anda akan diantar menuju hotel untuk beristirahat.
    </p>

    <p>
      Hari 9
      <br>
    ALTA – TROMSO (AURORA CHANCE)
      <br>
    Anda akan diantar menuju Tromso sebuah kota yang sering disebut sebagai “Gerbang Arktik” karena lokasinya yang berada di dalam lingkar arktik. Sesampainya di Tromso, Anda akan diantar untuk mengunjungi Polaria Aquarium dimana Anda dapat melihat berbagai spesies hewan laut dari perairan Arctic serta Arctic Cathedral yang sangat ikonik berbentuk segitiga melambangkan gunung es dan kapal yang merupakan landskap Arktik. Setelah itu Anda akan diantar menuju hotel untuk bermalam.
    </p>

    <p>
      Hari 10
      <br>
    TROMSO – COPENHAGEN (BY FLIGHT)
      <br>
      Anda hari ini dilanjutkan menuju Copenhagen dengan menggunakan pesawat domestik. Sesampainya di Copenhagen, Anda memiliki waktu bebas untuk menikmati kota atau berbelanja dikawasan Stoget.
    </p>

<p>
      Hari 11
      <br>
    COPENHAGEN – SINGAPORE
      <br>
      Anda akan diantar menuju bandara guna penerbangan kembali menuju tanah air tercinta Indonesia via Singapore.

    </p>

<p>
      Hari 12
      <br>
      SINGAPORE – JAKARTA
      <br>
      Tiba di Jakarta dengan penuh kenangan yang indah. Kami mengucapkan terima kasih atas partisipasi anda dalam program perjalanan wisata bersama Kami.
    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>
                </div>
                </div>
    </div>

    <!-- <div class="card mb-3">
                <div class="card-header">
                    <img src="img/kyu.jpg" class="rounded mx-auto d-block"alt="" height="500px"> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>Paket Bulan Madu</h3>
                    </div>
                    <div>
                        <p>3D/2N Honeymoon Package</p>
                        <p>Kayumanis Jimbaran Private Estate & Spa</p>
                    </div>
                    <div>
                        <p>Harga: IDR 5.250.000 </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                    <a href="reservasi-fin1.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a>
                </div>
                </div>
    </div> -->
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