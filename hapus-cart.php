<?php

include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM produk WHERE id='$id';";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo'<script>alert("Produk Dihapus"); window.location="admin-tab3-tokped.php"; </script>';
} else {
    echo '<script>alert("Woops! Terjadi kesalahan.") window.location="admin-tab3-tokped.php"; </script>';
}
?>
