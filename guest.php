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
$sql = query("SELECT * FROM datapengunjung ORDER BY id DESC");

// Tombol search
if (isset($_POST["temukan"])){
  $sql = temukan($_POST['search']);
}

check_roles(['admin']);
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

<div class="bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Riwayat Reservasi</h3>
                <hr>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <form action="" method="post" class="d-flex">
                    <input name="search" type="search" class="form-control me-2" autocomplete="off" placeholder="Search by name">
                    <button name="temukan" type="submit" class="btn btn-primary">Search</button>
                </form>
                <button type="button" class="btn btn-outline-primary ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    <b>Reservasi</b>
                </button>
                <?php include('reservasi.php'); ?>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Destinasi</th>
                        <th scope="col">Tanggal Keberangkatan</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $i=1; ?>
                    <?php foreach ($sql as $row): ?>
                    <tr>
                        <th><?= $i; ?></th>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jml"]; ?></td>
                        <td><?= $row["cekin"]; ?></td>
                        <td><?= $row["no"]; ?></td>
                        <td>
                            <a href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('Anda Yakin Ingin Membatalkan Pemesanan?')" class="btn btn-outline-info">Batal</a>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" 
                                data-bs-target="#rescheduleModal"
                                data-id="<?= $row['id']; ?>"
                                data-nama="<?= htmlspecialchars($row['nama']); ?>"
                                data-destinasi="<?= htmlspecialchars($row['jml']); ?>"
                                data-tanggal="<?= $row['cekin']; ?>"
                                data-no="<?= htmlspecialchars($row['no']); ?>">
                                Reschedule
                            </button>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Reschedule -->
<div class="modal fade" id="rescheduleModal" tabindex="-1" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rescheduleModalLabel">Reschedule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="post" novalidate>
                    <input type="hidden" name="id" id="modal-id">
                    <div class="mb-3">
                        <label for="modal-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="modal-nama" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="modal-destinasi" class="form-label">Destinasi</label>
                        <select name="jml" class="form-select" id="modal-destinasi" required readonly></select>
                    </div>
                    <div class="mb-3">
                        <label for="modal-tanggal" class="form-label">Tanggal Keberangkatan</label>
                        <input name="cekin" type="date" class="form-control" id="modal-tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="modal-no" class="form-label">No. HP</label>
                        <input type="text" class="form-control" id="modal-no" disabled>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<footer class="fixed-bottom text-center text-white" style="background-color: #009ada;">
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
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const rescheduleModal = document.getElementById("rescheduleModal");

        rescheduleModal.addEventListener("show.bs.modal", (event) => {
            const button = event.relatedTarget;
            const id = button.getAttribute("data-id");
            const nama = button.getAttribute("data-nama");
            const destinasi = button.getAttribute("data-destinasi");
            const tanggal = button.getAttribute("data-tanggal");
            const no = button.getAttribute("data-no");

            rescheduleModal.querySelector("#modal-id").value = id;
            rescheduleModal.querySelector("#modal-nama").value = nama;
            rescheduleModal.querySelector("#modal-destinasi").innerHTML = `<option value="${destinasi}" selected>${destinasi}</option>`;
            rescheduleModal.querySelector("#modal-tanggal").value = tanggal;
            rescheduleModal.querySelector("#modal-no").value = no;
        });
    });
</script>
</body>
</html>
