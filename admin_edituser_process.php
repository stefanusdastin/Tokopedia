<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $user = $_POST['user'];
    $level = filter_input(INPUT_POST, "level", FILTER_VALIDATE_INT);

    if ($level == 1) {
        $l = "pengguna";
    }elseif ($level == 2) {
        $l = "admin";
    }
    $query = "UPDATE user SET username='$user', level='$l' WHERE email='" . $email . "';";
    $res = mysqli_query($conn, $query);
    if (!$res) {
        echo '<script>alert("Gagal"); window.location="admin-tab2-tokped.php"; </script>';
    } else {
        echo '<script>alert("Berhasil"); window.location="admin-tab2-tokped.php"; </script>';
    }
}
