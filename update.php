<?php
// Masukkan file koneksi dan fungsi helper
require 'functions.php';

// Periksa apakah tombol submit telah ditekan
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $id = $_POST['id'];
    $jml = $_POST['jml']; // Destinasi
    $cekin = $_POST['cekin']; // Tanggal keberangkatan

    // Query untuk mengupdate data di database
    $query = "UPDATE datapengunjung 
              SET jml = '$jml', cekin = '$cekin'
              WHERE id = $id";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa apakah update berhasil
    if ($result) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                document.location.href = 'guest.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diperbarui!');
                document.location.href = 'guest.php';
              </script>";
    }
} else {
    // Jika akses langsung ke file tanpa form, redirect kembali ke halaman utama
    header('Location: guest.php');
    exit;
}
?>