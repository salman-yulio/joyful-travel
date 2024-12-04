<?php

    require 'functions.php';

    $id = $_GET["id"];

    if (hapus($id)>0){
        echo 
        "<script>
            alert('Pembatalan pesanan Gagal');
            document.location.href = 'guest.php';
        </script>";
    }
    else {
        echo 
        "<script>
            alert('Pemesanan berhasil dibatalkan');
            document.location.href = 'guest.php';
        </script>";
    }

?>