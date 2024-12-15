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

    <!-- <div>
        <h3>Jepang</h3>
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
<h1>Jepang</h1>
        <p class="fs-5">Jepang adalah sebuah negara kepulauan di Asia Timur yang terbagi menjadi empat pulau utama, yaitu Hokkaido, Honshu (pulau terbesar), Shikoku, dan Kyushu. Negara yang beribu kota di Tokyo ini menawarkan beragam destinasi wisata menarik, seperti Mt. Fuji, Imperial Palace, Arashiyama Bamboo Forest, Osaka Castle, Shirakawago, dan DisneySea.</p>
    </div>

    <div class="card mb-3">
                <div class="card-header">
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2Fdc34f1d96f63c849cba8a1076d1de564.jpg&w=1920&q=75" class="img-fluid rounded mx-auto d-block"alt=""> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>PAKET TOUR 1 JAPAN + TOKYO DISNEYSEA & UNIVERSAL STUDIOS JAPAN</h3>
                    </div>
                    <div>
                        <p><b>Harga Tour IDR 26.388.000/orang</b></p>
                    </div>
                    <div>
                        <p>✈ MALAYSIAN AIRLINES
                          <br>
                          🏨 7 HARI
                          <br>
                          🌃 5 KOTA
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                <button type="button" class="btn btn-sml btn-primary p-1 m-1 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <b>BOOK NOW</b>
          </button>
<?php include('reservasi-jpn1.php'); ?>
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
    JAKARTA – X/KUALA LUMPUR – OSAKA
    <br>
    Anda diharapkan berkumpul di Bandara Internasional Soekarno-Hatta untuk memulai perjalanan menuju salah satu kota terbesar di Negeri Matahari Terbit.
    </p>
    <p>
    Hari 2
    <br>
    OSAKA 
    <br>
    Anda akan langsung diajak untuk mengunjungi tempat pembuatan film terbesar dan termegah dunia di Osaka yaitu Universal Studios Japan.
    </p>
    <p>
      Hari 3
      <br>
      OSAKA – KYOTO – TOYOHASHI
      <br>
      Anda menuju kota Kyoto untuk mengunjungi Kyomizu Temple yang merupakan warisan budaya dunia UNESCO dan termasuk salah satu kuil paling terkenal di Kyoto, serta Fushimi Inari Shrine. Setelah itu Anda akan melanjutkan perjalanan menuju Toyohashi untuk bermalam di sana.
    </p>
    <p>
      Hari 4
      <br>
      TOYOHASHI – HAMAMATSU – MT. FUJI – GOTEMBA PREMIUM OUTLETS – KAWAGUCHI
      <br>
      Anda akan melanjutkan perjalanan menuju Hamamatsu dengan menggunakan Bullet Train (Shinkansen) yaitu salah satu kereta api tercepat di dunia Untuk berwisata ke Gunung Fuji yang merupakan salah satu daya tarik utama Negeri Sakura. Setelah itu Anda akan diantar untuk berbelanja di Gotemba Premium Outlets. Malam ini Anda akan bermalam di daerah Kawaguchi.
    </p>
    <p>
      Hari 5
      <br>
      KAWAGUCHI – TOKYO
      <br>
      Anda akan diantar menuju kota Tokyo, serta mengunjungi Tokyo Tower Food Town, Asakusa Kannon Temple, Nakamise Street di mana Anda dapat mencicipi jajanan khas Jepang, serta salah satu pusat perbelanjaan yang terkenal di kota Tokyo yaitu Ginza
    </p>
    <p>
      Hari 6
      <br>
      TOKYO DISNEYSEA – NARITA – X/KUALA LUMPUR
      <br>
      Anda akan diantar untuk mengunjungi Tokyo Disneysea yaitu alam fantasi baru Disneyland yang bernuansa air dengan atraksi-atraksi yang menarik. Setelah santap malam, Anda akan diantar menuju bandara untuk penerbangan kembali menuju Jakarta via Kuala Lumpur.
    </p>
    <p>
      Hari 7
      <br>
      KUALA LUMPUR – JAKARTA
      <br>
      Hari ini Anda akan tiba kembali di Jakarta. Terima kasih atas partisipasinya dan sampai bertemu di dalam program tour kami yang lainnya.
    </p>
    <p>
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
                    <img src="https://www.goldenrama.com/_next/image?url=https%3A%2F%2Fgrts2.goldenrama.com%2Fimages%2Ffiledoc%2Fpictureref%2Fd7a51d81e97c78f68d984cc8de5f11c7.jpg&w=1920&q=75" class="img-fluid rounded mx-auto d-block"alt=""> 
                </div>
                <div class="card-body">
                    <div>
                        <h3>PAKET TOUR 2 SUPER SALE JAPAN GOLDEN ROUTE SPECIAL OFFER</h3>
                    </div>
                    <div>
                        <p><b>Harga Tour: IDR 22.888.000/pax</b></p>
                    </div>
                    <div>
                        <p>✈ MALINDO AIRWAYS
                          <br>
                          🏨 7 HARI
                          <br>
                          🌃 5 KOTA
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                <div>
                <button type="button" class="btn btn-sml btn-primary p-1 m-1 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <b>BOOK NOW</b>
          </button>
          <?php include('reservasi-jpn2.php'); ?>
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
    JAKARTA – X/KUALA LUMPUR
    <br>
    Hari ini Anda diharapkan berkumpul di Bandara Internasional Soekarno-Hatta untuk memulai perjalanan menuju salah satu kota besar di Negeri Matahari Terbit, Osaka via Kuala Lumpur.
    </p>
    <p>
    Hari 2
    <br>
    KUALA LUMPUR – OSAKA
    <br>
    Anda akan langsung diajak untuk berfoto dengan latar belakang Osaka Castle, serta mengunjungi salah satu pusat perbelanjaan terkenal di kota Osaka yaitu Shinsaibashi.
    </p>
    <p>
      Hari 3
      <br>
      OSAKA – KYOTO – TOYOHASHI
      <br>
      Anda akan diantar menuju kota Kyoto dengan menggunakan Bullet Train (Shinkansen). Anda akan langsung diajak untuk mengunjungi Arashiyama Bamboo Forest dan Fushimi Inari Shrine. Setelah itu perjalanan Anda akan dilanjutkan kembali menuju kota Toyohashi untuk bermalam di sana.
    </p>
    <p>
      Hari 4
      <br>
      TOYOHASHI – OSHINO HAKKAI VILLAGE – KAWAGUCHI
      <br>
      Dilanjutkan kembali untuk mengunjungi Oshino Hakkai Village. Setelah itu Anda berkesempatan untuk menikmati keindahan Pagoda Chureito. Malam ini Anda akan diantar menuju kawasan Kawaguchi untuk beristirahat. Di sana Anda dapat mencoba pakaian tidur tradisional Jepang.
    </p>
    <p>
      Hari 5
      <br>
      AWAGUCHI – IYASHI NO SATO – GOTEMBA PREMIUM OUTLETS – TOKYO
      <br>
      Anda akan diantar menuju Iyashi no Sato yang merupakan salah satu desa tradisional Jepang dengan latar belakang Gunung Fuji. Di sana Anda juga berkesempatan untuk mencoba menggunakan pakaian tradisional khas Jepang yaitu Kimono. Siang harinya Anda akan diantar untuk berbelanja di Gotemba Premium Outlets. Malam ini Anda akan bermalam di kota Tokyo.
    </p>
    <p>
      Hari 6
      <br>
      TOKYO CITY TOUR – NARITA – X/KUALA LUMPUR
      <br>
      Pagi ini Anda akan diajak untuk berfoto dengan latar belakang Tokyo Skytree, serta mengunjungi Asakusa Kannon Temple. Nakamise Street di mana Anda dapat mencicipi jajanan khas Jepang dan juga Ginza yang merupakan salah satu pusat perbelanjaan terkenal di kota Tokyo. Setelah itu Anda akan kembali menuju Jakarta via Kuala Lumpur.
    </p>
    <p>
      Hari 7
      <br>
      KUALA LUMPUR – JAKARTA
      <br>
      Hari ini Anda akan tiba di Jakarta. Terima kasih atas partisipasi Anda dan sampai bertemu di dalam program tour kami yang lainnya.
    </p>
    <p>
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
                    <a href="reservasi-jpn1.php" class="btn btn-sml btn-primary p-1 m-1 text-white"><b>BOOK NOW</b></a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>