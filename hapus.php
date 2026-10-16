<?php

    require 'functions.php';
    check_roles(['admin']);

    // Hanya terima POST, supaya pembatalan tidak bisa dipicu lewat link
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST["id"])) {
        header('Location: guest.php');
        exit;
    }

    if (hapus($_POST["id"]) > 0){
        echo
        "<script>
            alert('Pemesanan berhasil dibatalkan');
            document.location.href = 'guest.php';
        </script>";
    }
    else {
        echo
        "<script>
            alert('Pembatalan pesanan Gagal');
            document.location.href = 'guest.php';
        </script>";
    }

?>