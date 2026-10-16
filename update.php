<?php
// Masukkan file koneksi dan fungsi helper
require 'functions.php';
check_roles(['admin']);

// Periksa apakah tombol submit telah ditekan
if (isset($_POST['submit'])) {
    // Update destinasi & tanggal keberangkatan (prepared statement di functions.php)
    $result = update($_POST);

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