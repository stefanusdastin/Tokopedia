<?php

include 'config.php';

$id = $_GET['idpesanan'];

$sql = "DELETE FROM pesanan WHERE id_pesanan='$id';";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo'<script>window.location="http://localhost/Tokopedia/cart-user.php"; </script>';
} else {
    echo'<script>alert("Woops! Terjadi kesalahan."); window.location="http://localhost/Tokopedia/cart-user.php"; </script>';
}
?>
