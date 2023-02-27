<?php

include 'config.php';

$email = $_GET['email'];

$sql = "DELETE FROM user WHERE email='$email';";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo'<script>alert("User Dihapus"); window.location="admin-tab2-tokped.php"; </script>';
} else {
    echo'<script>alert("Woops! Terjadi kesalahan."); window.location="admin-tab2-tokped.php"; </script>';
}
