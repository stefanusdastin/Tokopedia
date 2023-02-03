<?php
session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    echo '<script>
        alert("Anda berhasil logout");
        window.location="landing-tokped.php";
    </script>';
} else {
    header("location: landing-tokped.php");
    exit();
}
