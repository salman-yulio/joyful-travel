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

<div class="bg-light p-4 mb-2">
<div class="container p-3 my-3  bg-white">
<div class="d-flex justify-content-between">

    <!-- <form action="" class="d-flex p-2">
        <input type="search" class="form-control me-2 p-1 m-1" placeholder="Search">
        <button class="btn btn-sml btn-primary p-1 m-1 text-white">Search</button>
    </form> -->
    <!-- <br> -->

</div>


   <div class="row">

   <div>
    <h1>Australia</h1>
    <p class="fs-5">Sebagai benua terkecil di dunia, Australia memiliki enam negara bagian dan dua teritorial yang merupakan bagian dari negara persemakmuran, yaitu Australia Selatan, New South Wales, Queensland, Australia Barat, Tasmania, Victoria, Australia Utara, dan Australia Capital Territory. Terdapat berbagai hewan endemik di Australia seperti Kanguru dan Koala.</p>
  </div>

    <div class="card mb-3">
                <div class="card-header">
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2F9072b7e4f26ea2697ff0783c92c2189f.png&w=1920&q=75" class="rounded mx-auto d-block" alt="foto" height="500px"> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>PAKET TOUR 1 
                          AUSTRALIA TANGALOOMA+BLUE MOUNTAINS & PHILIPPE ISLAND
                        </h3>
                    </div>
                    <div>
                        <p><b>Harga Tour: IDR 38.900.000/ORANG
                        </b>
                        </p>
                    </div>
                    <div>
                        <p>✈ QANTAS AIRWAYS
                          <br>
                          🏨 8 HARI
                          <br>
                        🌃 4 KOTA
                      </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                    <a href="reservasi-aus1.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a>

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
    JAKARTA – SYDNEY
    <br>
    Anda diharapkan berkumpul di Bandara International Soekarno-Hatta, untuk memulai perjalanan ke negeri Kangguru, Australia.
    </p>
    <p>
    Hari 2
    <br>
    TIBA DI SYDNEY
    <br>
    Anda akan city tour melewati The Rocks, Double Bay, Rose Bay dan photo stop di objek-objek wisata seperti: Mrs. Macquaries’s Chair, Circular Quay, Sydney Harbour Bridge dan Sydney Opera House. Anda juga akan diajak mengunjungi Sydney Fish Market dimana Anda dapat mencoba berbagai macam makanan seafood segar disini.
    </p>
    <p>
      Hari 3
      <br>
      SYDNEY
      <br>
      Anda akan diajak untuk mengunjungi Blue Mountain untuk melihat keindahan Three Sisters dari Queen Elizabeth Look Out. Anda juga diajak untuk turun ke dasar lembahnya dengan menggunakan scenic rail. Setelah itu berbelanja di DFO Homebush sebelum kembali ke hotel.
    </p>
    <p>
      Hari 4
      <br>
      SYDNEY – BRISBANE – GOLD COAST
      <br>
      Anda akan diantar ke Gold Coast untuk mengunjungi Dreamworld, dimana Anda bisa menikmati sepuasnya permainan mendebarkan seperti; Steel Taipan, The Claw, Sky Voyager, The Giant Drop, Dream World Express serta melihat binatang khas negara Australia 
    </p>
    <p>
      Hari 5
      <br>
      BRISBANE – TANGALOOMA – BRISBANE
      <br>
      Anda akan diantar menuju Holt St. Warf untuk menyeberang ke Tangalooma Wild Dolphin Resort. Disana Anda dapat menikmati Desert Tour dengan menggunakan kendaraan 4WD untuk melihat keindahan alam Tangalooma. Juga dapat mencoba berseluncur diatas pasir – Sand Tobogganing.

    </p>
    <p>
      Hari 6
      <br>
      BRISBANE – MELBOURNE
      <br>
      Anda akan diajak melihat Brighton Bathing Boxes, untuk melihat keunikan dari dekorasi bangunan rumah kayu yang diberikan warna-warni menarik. Kemudian city tour melihat Parliament House dan photo stop di objek-objek wisata seperti: St. Patrick’s Cathedral, Fitzroy Garden dan Captain Cook’s Cottage 
    </p>
    <p>
      Hari 7
      <br>
      MELBOURNE - BELGRAVE - PHILLIP ISLAND - MELBOURNE
      <br>
Anda akan langsung diantar menuju stasiun kereta Belgrave untuk mencoba menaiki kereta uap Puffing Billy menuju Lakeside. Kemudian dilanjutkan mengunjungi The Chadstone – The Fashion Capital dimana terdapat kurang lebing 500 toko dengan brand seperti Balenciaga, Bally, Celine, Dior, dll. Lalu melanjutkan perjalanan menuju Philllip Island, dimana Anda bisa melihat sekawanan penguin yang datang dari bibir pantai (di malam hari). 
    </p>
    <p>
      Hari 8
      <br>
      MELBOURNE - JAKARTA
      <br>
      Anda akan diantar ke airport untuk penerbangan kembali ke Tanah Air.
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
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2F3c96a7932ffaf50ac77dd65cc7e731e1.png&w=1920&q=75" class="rounded mx-auto d-block"alt="" height="500px"> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>PAKET TOUR 2 AUSTRALIA AMAZING TASMANIA BRIDESTOWER LAVENDER + BRUNY ISLAND & MT. WELLINGTON 
                        </h3>
                    </div>
                    <div>
                        <p><b>Harga Tour: IDR 54.388.000/pax
                        </b>
                        </p>
                    </div>
                    <div>
                        <p>✈ SINGAPORE AIRLINES
                          <br>
                        🏨 8 HARI
                        <br>
                        🌃 3 KOTA
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                    <a href="reservasi-aus2.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a>
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
Jakarta - Singapore - Sydney
<br>
Anda diharapkan berkumpul di Bandara Internasional SoekarnoHatta untuk memulai perjalanan wisata menuju negeri kanguru dengan kota tujuan pertama Sydney via Singapore.
</p>

<p>
Hari 2
<br>
Sydney - Launceston
<br>
Anda akan melanjutkan perjalanan menuju kota Launceston yang berada di Pulau Tasmania sebuah pulau di selatan Australia yang terkenal akan keindahan alamnya. Setibanya di Launceston, Anda akan diantar menuju hotel untuk beristirahat.
</p>

<p>
  Hari 3
  <br>
  Launceston - Bridestowe - Tamar Valley - LauncestonI
  <br>
  Anda akan diantar menuju Bridestowe Lavender Estate salah satu ladang Lavender terbesar di Tasmania dimana Anda dapat melihat keindahan bunga Lavender dan membeli berbagai produk berbasis Lavender (Lavender berkembang pada umumnya dari Desember – Febuari dan bergantung kepada keadaan cuaca setempat). Kemudian kunjungan dilanjutkan menuju Grindelwald Swiss Village yang merupakan replika dari desa kecil di Swiss yang terletak di Tamar Valley. Kemudian Anda akan diantar menuju Cataract Gorge Reserve untuk menikmati pemandangan ngarai dan bebatuan dari atas dengan menggunakan kursi gantung Gorge Scenic Chairlift yang merupakan “World Longest Single Chairlift Span”.
</p>

  Hari 4
  <br>
  Launceston - Cradle Mountain - Launceston
  <br>
  Anda akan diajak menuju Cradle Mountain – Lake St Clair National Park, sebuah taman nasional yang terdaftar sebagai situs warisan dunia UNESCO dimana Anda akan diajak masuk ke dalam hutan Tasmania untuk melihat pemandangan indah air terjun, danau glasial serta satwa liarnya. Kemudian Anda juga akan diantar mengunjungi Ashgrove Cheese Farm untuk melihat area pembuatan dan pematangan keju, Anda juga berkesempatan mencicipi keju Tasmania yang terkenal. Setelah itu, Anda juga akan diantar untuk melihat keindahan Glow Worm di Marakoopa Cave yang merupakan gua batu kapur di taman nasional Mole Creek Karst.
</p>

<p>
  Hari 5
  <br>
  Launceston - Eaglehawk Neck - Hobart
  <br>
  Perjalanan hari ini dilanjutkan menuju kota Hobart yang merupakan ibukota Tasmania dimana Anda akan singgah terlebih dahulu di Eaglehawk Neck sebuah daerah yang terkenal dengan pemandangan pantainya yang menakjubkan. Anda dapat melihat Tasman Arch & Devil’s Kitchen yang merupakan tebing curam tinggi yang terbentuk akibat erosi air laut yang dapat mengeluarkan suara gemuruh karena terjangan air. Selanjutnya menuju kota Hobart untuk bermalam.
</p>

<p>
  Hari 6
  <br>
  Hobart - Bruny Island - Hobart
  <br>
  Anda diantar menuju Bruny Island untuk melihat pemandangan yang sangat indah dan spektakuler antara Port Arthur dan Eaglehawk Neck di Tasmania Selatan dengan menggunakan kapal Bruny Island Cruise untuk menyusuri bawah tebing laut tertinggi di belahan bumi selatan dengan menjelajahi air terjun, formasi bebatuan, lengkungan dan gua-gua laut yang merupakan rumah bagi satwa liar termasuk singa laut, paus-paus yang bermigrasi, serta burung laut
</p>

<p>
  Hari 7
  <br>
  Hobart - Brisbane
  <br>
  Anda akan diantar menuju Mount Wellington dimana Anda dapat melihat pemandangan kota Hobart dan sekelilingnya dari ketinggian. Setelah itu Anda akan diantar menuju bandara guna penerbangan menuju Brisbane. Setibanya disana, Anda akan diantar menuju hotel untuk beristirahat.
</p>

<p>
  Hari 8
  <br>
  Brisbane - Singapore - jakarta
  <br>
 Hari ini Anda akan diantar menuju bandara untuk penerbangan kembali ke tanah air tercinta, Indonesia, via Singapore.
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
                    <a href="reservasi-aus1.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a>
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