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

<div class="bg-light p-4 mb-2">
<div class="container p-3 my-3  bg-white">
<div class="d-flex justify-content-between">

    <!-- <form action="" class="d-flex p-2">
        <input type="search" class="form-control me-2 p-1 m-1" placeholder="Search">
        <button class="btn btn-sml btn-primary p-1 m-1 text-white">Search</button>
    </form> -->
    <!-- <br> -->


   <div class="row">

   <div>
    <h1>Australia</h1>
    <p class="fs-5">Sebagai benua terkecil di dunia, Australia memiliki enam negara bagian dan dua teritorial yang merupakan bagian dari negara persemakmuran, yaitu Australia Selatan, New South Wales, Queensland, Australia Barat, Tasmania, Victoria, Australia Utara, dan Australia Capital Territory. Terdapat berbagai hewan endemik di Australia seperti Kanguru dan Koala.</p>
  </div>

    <div class="card mb-3">
                <div class="card-header">
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2F9072b7e4f26ea2697ff0783c92c2189f.png&w=1920&q=75" class="img-fluid rounded mx-auto d-block" alt="foto"> 
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
                    <!-- <a href="reservasi-aus1.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a> -->
            <button type="button" class="btn btn-sml btn-primary p-1 m-1 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <b>BOOK NOW</b>
          </button>
<?php include('reservasi-aus1.php'); ?>


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
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2F3c96a7932ffaf50ac77dd65cc7e731e1.png&w=1920&q=75" class="img-fluid rounded mx-auto d-block" alt="foto-aus-2"> 
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
                <button type="button" class="btn btn-sml btn-primary p-1 m-1 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <b>BOOK NOW</b>
          </button>
          <?php include('reservasi-aus2.php'); ?>
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