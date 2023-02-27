<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "UPDATE produk SET nama='$nama', harga='$harga', stok='$stok' WHERE id='" . $id . "';";
    $res = mysqli_query($conn, $query);
    if (!$res) {
        echo '<script>alert("Gagal"); window.location="admin-tab3-tokped.php"; </script>';
    } else {
        echo '<script>alert("Berhasil"); window.location="admin-tab3-tokped.php"; </script>';
    }
}
